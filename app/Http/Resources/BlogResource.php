<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'published_at' => date('d M, Y', strtotime($this->created_at)),
            'image' => url('/images/' . $this->image),
            'author_image' => url('frontendassets/img/author/author.jpg'),
            'user_id'=> $this->user_id,
            'body'=> $this->body,

            
        ];
    }
}
