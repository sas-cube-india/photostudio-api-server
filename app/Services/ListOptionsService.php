<?php

namespace App\Services;

use App\Models\Cover;
use App\Models\Orientation;
use App\Models\OrientationSize;
use App\Models\Sheet;

class ListOptionsService
{
    public static function orientation_options()
    {
        return Orientation::all()->map(function ($orientation) {
            return [
                'value' => $orientation->id,
                'label' => $orientation->name,
            ];
        });
    }

    public static function orientation_size_options($orientation_id)
    {
        return OrientationSize::where('orientation_id', $orientation_id)->get()->map(function ($orientation_size) {
            return [
                'value' => $orientation_size->id,
                'label' => $orientation_size->height . 'x' . $orientation_size->width,
            ];
        });
    }

    public static function sheet_options()
    {
        return Sheet::all()->map(function ($sheet) {
            return [
                'value' => $sheet->id,
                'label' => $sheet->name,
            ];
        });
    }

    public static function cover_options()
    {
        return Cover::all()->map(function ($cover) {
            return [
                'value' => $cover->id,
                'label' => $cover->name,
            ];
        });
    }
}
