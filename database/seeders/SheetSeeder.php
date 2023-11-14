<?php

namespace Database\Seeders;

use App\Models\Sheet;
use Illuminate\Database\Seeder;

class SheetSeeder extends Seeder
{
    public function run()
    {
        Sheet::truncate();

        Sheet::create(['name' => 'Thermal Sheet']);
        Sheet::create(['name' => 'White Sheet']);
        Sheet::create(['name' => 'Black Sheet']);
    }
}
