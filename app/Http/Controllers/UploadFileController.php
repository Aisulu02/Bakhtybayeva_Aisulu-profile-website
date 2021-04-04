<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UploadFileController extends Controller{
    public function index(){
        return view('file_upload');
    }

    public function showUploadFile(Request $request){
        $file = $request -> file('image');

        //Display File name
        echo 'File name: ' .$file->getClientOriginalName();
        echo '<br>';

        //Display File extension
        echo 'File extension: ' .$file -> getClientOriginalExtension();
        echo '<br>';

        //Display File real path
        echo 'File real path: ' .$file -> getRealPath();
        echo '<br>';

         //Display File size
         echo 'File size: ' .$file -> getSize();
         echo '<br>';

        //Display File Mime type
        echo 'File Mime type: ' .$file -> getMimeType();
        
        //Move Uploaded file
        $destinationPath = 'uploads';
        $file -> move($destinationPath, $file -> getClientOriginalName());
    }
}
