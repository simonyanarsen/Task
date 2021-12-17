<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFileRequest;
use App\Repository\MediaFileRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FileController extends Controller
{
    /**
     * @var MediaFileRepositoryInterface
     */
    protected $mediaFileRepository;

    /**
     * @param MediaFileRepositoryInterface $mediaFileRepository
     */
    public function __construct(MediaFileRepositoryInterface $mediaFileRepository)
    {
        $this->mediaFileRepository = $mediaFileRepository;
    }

    public function getUploadFiles()
    {
        return $this->mediaFileRepository->getFiles();
    }

    public function postUploadFile(UploadFileRequest $request): bool
    {
        try {
            return $this->mediaFileRepository->postUploadFile($request->file);
        } catch (\Exception $exception) {
            Log::error('error', $exception);

            return false;
        }
    }

    public function getByIdUploadFiles(int $id)
    {
        return $this->mediaFileRepository->getFileById($id);
    }
}
