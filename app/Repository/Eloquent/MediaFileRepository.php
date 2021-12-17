<?php

namespace App\Repository\Eloquent;

use App\Http\Resources\MediaFileResource;
use App\Models\MediaFile;
use App\Repository\MediaFileRepositoryInterface;
use App\Traits\StorageTrait;

class MediaFileRepository implements MediaFileRepositoryInterface
{
    use StorageTrait;

    protected $modelMediaFile;

    public function __construct(MediaFile $mediaFile)
    {
        $this->modelMediaFile = $mediaFile;
    }

    public function getFiles()
    {
        return $this->modelMediaFile->get();
    }

    public function postUploadFile($file)
    {
        $result = $this->save($file);

        return $this->modelMediaFile->create($result);
    }

    public function getFileById(int $id)
    {
        return MediaFileResource::make($this->modelMediaFile->find($id));
    }
}
