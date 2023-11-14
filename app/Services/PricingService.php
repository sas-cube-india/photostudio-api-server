<?php

namespace App\Services;

use App\Http\Resources\CoverPricingResource;
use App\Http\Resources\SheetPricingResource;
use App\Models\CoverPricing;
use App\Models\SheetPricing;

class PricingService
{
    public static function sheet_pricing($sheet_id, $orientation_size_id)
    {
        $sheet_pricing = SheetPricing::where('sheet_id', $sheet_id)
            ->where('orientation_size_id', $orientation_size_id)->first();

        return new SheetPricingResource($sheet_pricing);
    }

    public static function cover_pricing($cover_id, $orientation_size_id)
    {
        $cover_pricing = CoverPricing::where('cover_id', $cover_id)
            ->where('orientation_size_id', $orientation_size_id)->first();

        return new CoverPricingResource($cover_pricing);
    }

}
