<?php

namespace App\Services;

use App\Models\BoxSleeve;
use App\Models\Cover;
use App\Models\Orientation;
use App\Models\OrientationSize;
use App\Models\ProductType;
use App\Models\Sheet;

class ListOptionsService
{

    public static function product_options()
    {
        $orientations = Orientation::all();
        $orientation_size = OrientationSize::all();
        $sheets = Sheet::all();
        $cover = Cover::all();
        $box_sleeve = BoxSleeve::all();

        return [
            [
                'name'        => '',
                'img'         => '',
                'minPage'     => 20,
                'Orientation' => $orientations,
                'size'        => $orientation_size,
                'SheetType'   => $sheets,
                'cover'       => $cover,
                'boxSleev'    => $box_sleeve,
                'printOption' => [],
                'color'       => [],
            ],
        ];
    }

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

    public static function box_sleeve_options()
    {
        return BoxSleeve::all()->map(function ($box_sleeve) {
            return [
                'value' => $box_sleeve->id,
                'label' => $box_sleeve->name,
            ];
        });
    }

    public static function product_type_options()
    {
        return ProductType::all()->map(function ($product_type) {
            return [
                'value' => $product_type->id,
                'label' => $product_type->name,
            ];
        });
    }
}
