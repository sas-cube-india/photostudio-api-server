<?php

namespace Database\Seeders;

use App\Models\SheetPricing;
use Illuminate\Database\Seeder;

class SheetPricingSeeder extends Seeder
{
    public function run()
    {
        // Thermal Sheet Pricing for Square Orientation
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 1, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 2, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 3, 'price' => 170]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 4, 'price' => 280]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 5, 'price' => 280]);

        // White Sheet Pricing for Square Orientation
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 1, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 2, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 3, 'price' => 200]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 4, 'price' => 320]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 5, 'price' => 320]);

        // Black Sheet Pricing for Square Orientation
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 1, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 2, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 3, 'price' => 200]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 4, 'price' => 320]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 5, 'price' => 320]);

        // Thermal Sheet Pricing for Landscape Orientation
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 6, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 7, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 8, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 9, 'price' => 200]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 10, 'price' => 200]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 11, 'price' => 235]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 12, 'price' => 235]);

        // White Sheet Pricing for Landscape Orientation
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 6, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 7, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 8, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 9, 'price' => 235]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 10, 'price' => 235]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 11, 'price' => 270]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 12, 'price' => 270]);

        // Black Sheet Pricing for Landscape Orientation
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 6, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 7, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 8, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 9, 'price' => 235]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 10, 'price' => 235]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 11, 'price' => 270]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 12, 'price' => 270]);

        // Thermal Sheet Pricing for Portrait Orientation
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 13, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 14, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 15, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 16, 'price' => 145]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 17, 'price' => 280]);
        SheetPricing::create(['sheet_id' => 1, 'orientation_size_id' => 18, 'price' => 280]);

        // White Sheet Pricing for Portrait Orientation
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 13, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 14, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 15, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 16, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 17, 'price' => 320]);
        SheetPricing::create(['sheet_id' => 2, 'orientation_size_id' => 18, 'price' => 320]);

        // Black Sheet Pricing for Portrait Orientation
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 13, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 14, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 15, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 16, 'price' => 165]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 17, 'price' => 320]);
        SheetPricing::create(['sheet_id' => 3, 'orientation_size_id' => 18, 'price' => 320]);
    }
}
