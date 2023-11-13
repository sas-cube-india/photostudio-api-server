<?php

namespace Database\Seeders;

use App\Models\Cover;
use Illuminate\Database\Seeder;

class CoverSeeder extends Seeder
{

    public function run()
    {
        Cover::create([
            'title'          => 'Image Wrap',
            'standard_price' => 2000,
            'premium_price'  => 1800,
        ]);

        Cover::create([
            'title'          => 'Leather',
            'standard_price' => 2000,
            'premium_price'  => 1800,
        ]);

        Cover::create([
            'title'          => 'Photo',
            'standard_price' => 2000,
            'premium_price'  => 1800,
        ]);

        Cover::create([
            'title'          => 'Acrylic Cameo',
            'standard_price' => 2000,
            'premium_price'  => 1800,
        ]);

        Cover::create([
            'title'          => 'Canvas',
            'standard_price' => 2000,
            'premium_price'  => 1800,
        ]);

    }
}
