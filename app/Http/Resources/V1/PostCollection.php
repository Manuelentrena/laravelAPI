<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\V1\PostResource;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public $collects = PostResource::class;

    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => 'metadato'
        ];
    }
}
