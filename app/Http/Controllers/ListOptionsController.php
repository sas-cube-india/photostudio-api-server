<?php

namespace App\Http\Controllers;

use App\Services\ListOptionsService;

class ListOptionsController extends Controller
{
    public function orientation_options()
    {
        $options = ListOptionsService::orientation_options();

        return response()->json([
            'data'   => $options,
            'status' => 200,
        ], 200);
    }

    public function orientation_size_options($orientation_id)
    {
        $options = ListOptionsService::orientation_size_options($orientation_id);

        return response()->json([
            'data'   => $options,
            'status' => 200,
        ], 200);
    }

    public function sheet_options()
    {
        $options = ListOptionsService::sheet_options();

        return response()->json([
            'data'   => $options,
            'status' => 200,
        ], 200);
    }

    public function cover_options()
    {
        $options = ListOptionsService::cover_options();

        return response()->json([
            'data'   => $options,
            'status' => 200,
        ], 200);
    }

    public function box_sleeve_options()
    {
        $options = ListOptionsService::box_sleeve_options();

        return response()->json([
            'data'   => $options,
            'status' => 200,
        ], 200);
    }
}
