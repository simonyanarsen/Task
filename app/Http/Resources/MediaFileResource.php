<?php

namespace App\Http\Resources;

use App\Traits\StorageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class MediaFileResource extends JsonResource
{
    use StorageTrait;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'id'=> $this->id,
            'title' => $this->title,
            'fileable' => pathinfo($this->file_path)
        ];
    }
}
