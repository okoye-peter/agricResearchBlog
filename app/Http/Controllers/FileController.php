<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public static function upload($file, String $path)
    {
        $name = uniqid() . $file->getClientOriginalName();
        if($file->move(public_path($path), $name)){
            return [
                'url' => $path.'/'.$name,
                'type' => $file->getClientMimeType()
            ];
        }
    }
}
