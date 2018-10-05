<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PostResource extends Resource
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
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'body' => $this->body,
            'created_at' => (string)$this->created_at,
            'updated_at' => $this->updated_at,
            'user' => new UserResource($this->user),
            'tags' => $this->tags
        ];
        // return parent::toArray($request);
    }
}
