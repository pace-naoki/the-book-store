<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'book_id' => $this->id,
                'title' => $this->title,
                'description' => $this->description,
                'published_at' => $this->published_at->format('m/d/Y'),
                'last_updated' => $this->updated_at->diffForHumans()
            ],
            'links' => [
                'self' => $this->path
            ]
        ];
    }
}
