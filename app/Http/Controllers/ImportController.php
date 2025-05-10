<?php
namespace App\Http\Controllers;

use App\Models\Import;
use App\Jobs\ProcessImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{
    public function index()
    {
        $imports = Import::all();
        return view('imports.index', compact('imports'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,csv',
        ]);

        $path = $request->file('file')->store('imports');
        $fileName = $request->file('file')->getClientOriginalName();

        $import = Import::create([
            'file_name' => $fileName,
            'status' => 'Ready to import',
        ]);

        ProcessImport::dispatch($import, $path);

        return redirect()->route('imports.index')->with('success', 'File uploaded successfully and is being processed.');
    }
}