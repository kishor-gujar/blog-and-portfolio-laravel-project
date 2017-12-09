<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class User extends Resource
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
        'name'  => $this->name,
        'email' => $this->email,
        'avatar'=> $this->avatar,
        'member_since' => $this->created_at,
      ];
    }
}
