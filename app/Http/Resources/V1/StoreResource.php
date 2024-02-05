<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'city' => $this->city,
            'state' => $this->state,
            'current_location' => $this->current_location,
            'description' => $this->description,
            'logo' => $this->logo,
            'products' => $this->products
        ];
    }
}
