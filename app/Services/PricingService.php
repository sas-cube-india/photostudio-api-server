<?php

namespace App\Services;

use App\Http\Resources\SheetPricingResource;
use App\Models\SheetPricing;

class PricingService
{
    public static function sheet_pricing($sheet_id, $orientation_size_id)
    {
        $sheet_pricing = SheetPricing::where('sheet_id', $sheet_id)
            ->where('orientation_size_id', $orientation_size_id)->first();

        return new SheetPricingResource($sheet_pricing);
    }

}
