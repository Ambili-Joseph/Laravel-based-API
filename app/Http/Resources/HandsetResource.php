<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HandsetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->name,
            'name' => $this->brand,
            'email' => $this->price,
            'email' => $this->release_date,
            'email' => $this->features ? json_encode($this->features) : [],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
        // return parent::toArray($request);
    }
}
