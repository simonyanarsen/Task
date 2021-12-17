<?php

namespace App\Repository;

interface MediaFileRepositoryInterface
{
    public function getFiles();

    public function postUploadFile($file);

    public function getFileById(int $id);
}
