<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    public function run()
    {
        ProductType::truncate();

        ProductType::create(['name' => 'Flush Mount']);
        ProductType::create(['name' => 'Photo Book']);
    }
}
