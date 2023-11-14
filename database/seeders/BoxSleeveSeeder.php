<?php

namespace Database\Seeders;

use App\Models\BoxSleeve;
use Illuminate\Database\Seeder;

class BoxSleeveSeeder extends Seeder
{
    public function run()
    {
        BoxSleeve::truncate();

        BoxSleeve::create(['name' => 'Leather Box']);
        BoxSleeve::create(['name' => 'Photo Box']);
        BoxSleeve::create(['name' => 'Linen Box']);
        BoxSleeve::create(['name' => 'Leather Sleeve']);
    }
}
