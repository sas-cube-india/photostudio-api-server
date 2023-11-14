<?php

namespace App\Http\Controllers;

use App\Services\PricingService;

class PricingController extends Controller
{
    public function sheet_pricing($sheet_id, $orientation_size_id)
    {
        $options = PricingService::sheet_pricing($sheet_id, $orientation_size_id);

        return response()->json([
            'data'   => $options,
            'status' => 200,
        ], 200);
    }

    public function cover_pricing($cover_id, $orientation_size_id)
    {
        $options = PricingService::cover_pricing($cover_id, $orientation_size_id);

        return response()->json([
            'data'   => $options,
            'status' => 200,
        ], 200);
    }
}
