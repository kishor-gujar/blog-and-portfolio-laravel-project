<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Portfolio extends Resource
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
            'title' => $this->title,
            'image' => $this->image1,
            'url' => route('portfolio.single',[$this->id, $this->slug])
        ];
        return parent::toArray($request);
    }
}
