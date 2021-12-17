<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

trait StorageTrait
{

    private function save($file)
    {
        /** @var $filename / filter file name */
        $filename = time() . str_replace([' ', '+', ')', '(', ',', '-', '_', '{', '}', '[', ']'],
                                         '', $file->getClientOriginalName());
        return [
            'title' => $filename,
            'file_path' => 'storage/'.Storage::disk('public')->putFileAs( '_img', $file, $filename),
        ];
    }


}
