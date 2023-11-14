<?php

namespace App\Http\Controllers;

use App\Services\PricingService;

class PricingController extends Controller
{
    public function sheet_pricing($sheet_id, $orientation_size_id)
    {
        $pricing = PricingService::sheet_pricing($sheet_id, $orientation_size_id);

        return response()->json([
            'data'   => $pricing,
            'status' => 200,
        ], 200);
    }

    public function cover_pricing($cover_id, $orientation_size_id)
    {
        $pricing = PricingService::cover_pricing($cover_id, $orientation_size_id);

        return response()->json([
            'data'   => $pricing,
            'status' => 200,
        ], 200);
    }

    public function box_sleeve_pricing($box_sleeve_id, $orientation_size_id)
    {
        $pricing = PricingService::box_sleeve_pricing($box_sleeve_id, $orientation_size_id);

        return response()->json([
            'data'   => $pricing,
            'status' => 200,
        ], 200);
    }
}
