<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
         'id'=>$this->id,
           'user_id'=>$this->user_id,
           'title'=>$this->title,
           'category_id'=>$this->category_id,
           'body'=>$this->body,
           'author'=>[
               'name'=>$this->author->name,
               'username'=>$this->author->username,
               'email'=>$this->author->email
           ]
       ];
    }
}
