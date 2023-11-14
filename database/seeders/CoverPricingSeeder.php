<?php

namespace Database\Seeders;

use App\Models\CoverPricing;
use Illuminate\Database\Seeder;

class CoverPricingSeeder extends Seeder
{
    public function run()
    {
        // truncate the model
        CoverPricing::truncate();

        // Square Cover pricing
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 1, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 2, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 1, 'price' => 2200]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 2, 'price' => 2200]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 3, 'price' => 2200]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 4, 'price' => 2200]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 5, 'price' => 2200]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 6, 'price' => 2700]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 7, 'price' => 2700]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 8, 'price' => 3500]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 3, 'cover_id' => 9, 'price' => 3500]);

        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 1, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 2, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 3, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 4, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 5, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 6, 'price' => 4000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 7, 'price' => 4000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 8, 'price' => 5300]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 4, 'cover_id' => 9, 'price' => 5300]);

        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 1, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 2, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 3, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 4, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 5, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 6, 'price' => 4000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 7, 'price' => 4000]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 8, 'price' => 5300]);
        CoverPricing::create(['orientation_id' => 1, 'orientation_size_id' => 5, 'cover_id' => 9, 'price' => 5300]);

        // Landscape Cover pricing
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 6, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 7, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 8, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 1, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 2, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 3, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 4, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 5, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 6, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 7, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 8, 'price' => 3800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 9, 'cover_id' => 9, 'price' => 3800]);

        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 1, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 2, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 3, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 4, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 5, 'price' => 2500]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 6, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 7, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 8, 'price' => 3800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 10, 'cover_id' => 9, 'price' => 3800]);

        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 1, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 2, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 3, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 4, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 5, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 6, 'price' => 3400]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 7, 'price' => 3400]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 8, 'price' => 4300]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 11, 'cover_id' => 9, 'price' => 4300]);

        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 1, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 2, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 3, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 4, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 5, 'price' => 2800]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 6, 'price' => 3400]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 7, 'price' => 3400]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 8, 'price' => 4300]);
        CoverPricing::create(['orientation_id' => 2, 'orientation_size_id' => 12, 'cover_id' => 9, 'price' => 4300]);

        // Portrait Size Pricing
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 13, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 14, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 15, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 1, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 2, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 3, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 4, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 5, 'price' => 2000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 6, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 7, 'price' => 2300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 8, 'price' => 2900]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 16, 'cover_id' => 9, 'price' => 2900]);

        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 1, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 2, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 3, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 4, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 5, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 6, 'price' => 4000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 7, 'price' => 4000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 8, 'price' => 5300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 17, 'cover_id' => 9, 'price' => 5300]);

        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 1, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 2, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 3, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 4, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 5, 'price' => 3000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 6, 'price' => 4000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 7, 'price' => 4000]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 8, 'price' => 5300]);
        CoverPricing::create(['orientation_id' => 3, 'orientation_size_id' => 18, 'cover_id' => 9, 'price' => 5300]);

    }
}
