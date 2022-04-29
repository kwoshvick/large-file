<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadCsvRequest;
use App\Services\FileService;

class FileController extends Controller
{

    private FileService $fileService;

    public function __construct(FileService $fileService){
        $this->fileService = $fileService;
    }

    public function index(){
        return view('uploader');
    }

    public function uploadCsv(UploadCsvRequest $request){
        return $this->fileService->uploadMedia($request);
    }

}
