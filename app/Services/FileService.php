<?php

namespace App\Services;

use App\Imports\CsVDataImport;
use App\Jobs\ImportJob;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class FileService
{

    public function uploadMedia(Request $request)
    {
        $logoPath = 'uploads/csv/';
        $file = $request->file('csv_file');
        $logoName = sha1(time().Str::random(8).rand(1,100)).'.'.$file->extension();
        $file->move(public_path($logoPath), $logoName);
        $this->importCsvData($logoPath.$logoName);
        return $logoPath.$logoName;
    }

    protected function importCsvData($csvPath){

        Excel::import(new CsVDataImport, $csvPath);
        ImportJob::dispatch($csvPath);
    }

}
