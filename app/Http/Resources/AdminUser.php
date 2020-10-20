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
            $userThumbnailMedia->getUrl('thumb_75') : 'https://via.placeholder.com/75';
        return [
            'thumbnail' => $userThumbnailUrl,
            'name' => $this->full_name,
            'role' => $this->pivot->role,
        ];
    }
}
