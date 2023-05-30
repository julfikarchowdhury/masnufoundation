<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

trait FileUploadTrait
{
    public function fileUpload($file,$path){
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($path), $file_name);
        //Storage::disk('public')->putFileAs($path, $file, $file_name);
        return $path.$file_name;
    }

    public function removeFile($existing_file){
        // Check if the file exists
        if (File::exists(public_path($existing_file))) {
            // The file exists, so remove it
            File::delete(public_path($existing_file));
        }
       // Storage::disk('public')->delete($existing_file);
    }

}