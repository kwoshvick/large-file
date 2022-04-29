<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadCsvRequest;
use App\Models\Data;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{

    private FileService $fileService;

    public function __construct(FileService $fileService){
        $this->fileService = $fileService;
    }

    public function index(){
        return view('index');
    }

    public function uploadCsv(Request $request){
        $validator = Validator::make($request->all(), ['csv_file'=>['required','mimes:csv']]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }
        $this->fileService->uploadMedia($request);
        return redirect(route('list'));
    }

    public function list(){
        return view('listing',['datas'=>Data::paginate(10)]);
    }

}
