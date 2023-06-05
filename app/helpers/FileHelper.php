<?php

namespace App\Helpers;

use App\Models\File as ModelsFile;
use Illuminate\Support\Facades\File;

class FileHelper
{
    public static function upload($file)
    {
        $path = 'uploads/';
        $fullpath = public_path() . $path;
        File::isDirectory($fullpath) or File::makeDirectory($fullpath, 0777, true, true);

        $ext = $file->extension();
        // $filename = time() . '.' . $ext;
        $filename = md5(uniqid(rand(), true).time()).'.'.$ext;

        $data = [

            'original_name' => $file->getClientOriginalName(),
            'filecode' => time(),
            'filetype' =>$file->getClientMimeType(),
            'filename' => $filename,
            'extention' => $ext,
            'filesize' => $file->getSize(),
            'filepath' => $path
        ];


        $f = ModelsFile::create($data);
        $file->move($path, $filename);
        return $f->id;
    }
}
