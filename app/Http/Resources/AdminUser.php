<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\MediaLibrary\Models\Media;

class AdminUser extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $userThumbnailMedia = $this->media;
        $userThumbnailUrl = $userThumbnailMedia instanceof Media ?
            "/media/{$userThumbnailMedia->id}/conversions/{$userThumbnailMedia->file_name}" : '';
        return [
            'thumbnail' => $userThumbnailUrl,
            'name' => $this->full_name,
            'role' => $this->pivot->role,
        ];
    }
}
