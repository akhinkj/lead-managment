<?php
namespace App\Jobs;

use App\Models\Import;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LeadsImport;

class ProcessImport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $import;
    protected $filePath;

    public function __construct(Import $import, $filePath)
    {
        $this->import = $import;
        $this->filePath = $filePath;
    }

    public function handle()
    {
        try {
            Excel::import(new LeadsImport($this->import), $this->filePath);
            $this->import->update(['status' => 'Success']);
        } catch (\Exception $e) {
            $this->import->update([
                'status' => 'Failure',
                'error_details' => ['error' => $e->getMessage()],
            ]);
        } finally {
            Storage::delete($this->filePath);
        }
    }
}