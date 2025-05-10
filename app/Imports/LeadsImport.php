<?php
namespace App\Imports;

use App\Models\Lead;
use App\Models\Import;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class LeadsImport implements ToCollection
{
    protected $import;

    public function __construct(Import $import)
    {
        $this->import = $import;
    }

    public function collection(Collection $rows)
    {
        $errors = [];
        foreach ($rows as $key => $row) {
            if ($key === 0) continue; // Skip header row

            try {
                Lead::create([
                    'first_name' => $row[0],
                    'last_name' => $row[1],
                    'email' => $row[2],
                    'mobile_number' => $row[3],
                    'street_1' => $row[4],
                    'street_2' => $row[5],
                    'city' => $row[6],
                    'state' => $row[7],
                    'country' => $row[8],
                    'lead_source' => $row[9],
                    'status' => $row[10],
                ]);
            } catch (\Exception $e) {
                $errors[] = [
                    'row' => $key + 1,
                    'error' => $e->getMessage(),
                ];
            }
        }

        if (!empty($errors)) {
            $this->import->update([
                'status' => 'Failure',
                'error_details' => $errors,
            ]);
        }
    }
}