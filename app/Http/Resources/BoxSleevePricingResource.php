<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BoxSleevePricingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'price' => $this->price,
        ];
    }
}
