<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
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
            'title'            =>$this->title,
            'author'           =>$this->author,
            'publication_date' =>$this->publication_date,
            'updated_by'       =>$this->updated_by
        ];
    }
}
