<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "Id"=> $this->id,
            "Content"=> $this->content,
            "Image"=> $this->image,
            "Created_at"=> $this->created_at,
        ];
    }
}
