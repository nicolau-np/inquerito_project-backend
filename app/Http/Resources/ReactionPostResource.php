<?php

namespace App\Http\Resources;

use App\Models\ReactionType;
use Illuminate\Http\Resources\Json\JsonResource;

class ReactionPostResource extends JsonResource
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
            'id'=>$this->id,
            'reaction_type'=>new ReactionTypeResource($this->reaction_types),
            'post'=>new PostResource($this->posts),
            'status'=>$this->status,
        ];
    }
}