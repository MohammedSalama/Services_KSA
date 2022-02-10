<?php

namespace App\Http\Controllers;

use App\Models\File_upload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        $files =  File_upload::all();
        return view('layouts.logo.index',compact('files'));
    }

    public function fileUploadPost(Request $request)
    {
        $request->validate(['file'=>'required|']);
    $name_file = time().'.'.$request->file->extension();

        $request->file->move(public_path('uploads'),$name_file);
//        dd($name_file);

        $file_upload = new File_upload();
    $file_upload->logo=$name_file;
    $file_upload->save();
    return redirect()->back()->with('ترفع الملف ');

    }
}
