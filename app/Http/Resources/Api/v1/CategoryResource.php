<?php

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "status" => $this->status,
            "user_id" => $this->user->name,
            "created_at" =>  $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
