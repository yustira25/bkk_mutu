<?php

namespace App\Helpers;

use App\Models\File as ModelsFile;
use Illuminate\Support\Facades\File;

class FileHelper
{
    public static function upload($file)
    {
        $path = public_path() . '/uploads';
        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

        $ext = $file->extension();
        $filename = time() . '.' . $ext;
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
        return $f->id;
    }
}
