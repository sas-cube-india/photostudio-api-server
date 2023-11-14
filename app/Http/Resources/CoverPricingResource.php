<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoverPricingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'price' => $this->price,
        ];
    }
}
