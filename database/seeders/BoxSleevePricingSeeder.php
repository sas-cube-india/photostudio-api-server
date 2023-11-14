<?php

namespace Database\Seeders;

use App\Models\BoxSleevePricing;
use Illuminate\Database\Seeder;

class BoxSleevePricingSeeder extends Seeder
{

    public function run()
    {
        BoxSleevePricing::truncate();

        // Square Size Box Sleeve Pricing
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 1, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 2, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 1, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 2, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 1, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 2, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 3, 'price' => 3500]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 3, 'price' => 3500]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 3, 'price' => 3500]);

        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 4, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 5, 'price' => 4000]);

        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 4, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 5, 'price' => 4000]);

        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 4, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 5, 'price' => 4000]);

        // Landscape size box sleeve pricing
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 6, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 7, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 8, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 6, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 7, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 8, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 6, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 7, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 8, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 9, 'price' => 3750]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 10, 'price' => 3750]);

        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 9, 'price' => 3750]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 10, 'price' => 3750]);

        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 9, 'price' => 3750]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 10, 'price' => 3750]);

        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 11, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 12, 'price' => 4000]);

        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 11, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 12, 'price' => 4000]);

        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 11, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 12, 'price' => 4000]);

        // Portrait size box sleeve pricing
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 13, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 14, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 15, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 16, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 13, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 14, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 15, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 16, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 13, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 14, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 15, 'price' => 3000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 16, 'price' => 3000]);

        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 17, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 1, 'orientation_size_id' => 18, 'price' => 4000]);

        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 17, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 2, 'orientation_size_id' => 18, 'price' => 4000]);

        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 17, 'price' => 4000]);
        BoxSleevePricing::create(['box_sleeve_id' => 3, 'orientation_size_id' => 18, 'price' => 4000]);

    }
}
