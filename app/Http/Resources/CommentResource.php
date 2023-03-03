<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'post'=>new PostResource($this->posts),
            'nome'=>$this->nome,
            'ano_formacao'=>$this->ano_formacao,
            'comment'=>$this->comment,
            'status'=>$this->status,
        ];
    }
}