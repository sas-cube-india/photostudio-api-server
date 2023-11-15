<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SystemSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            OrientationSeeder::class,
            SheetSeeder::class,
            SheetPricingSeeder::class,
            CoverSeeder::class,
            CoverPricingSeeder::class,
            BoxSleeveSeeder::class,
            BoxSleevePricingSeeder::class,
            ProductTypeSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
