<?php namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\Resource;

class Course extends Resource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'image' => $this->image,
            'createTime' => jdate($this->created_at)->format('datetime'),
            'episodes' => new EpisodeCollection($this->episodes)
        ];
    }
}