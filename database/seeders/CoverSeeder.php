<?php

namespace Database\Seeders;

use App\Models\Cover;
use Illuminate\Database\Seeder;

class CoverSeeder extends Seeder
{
    public function run()
    {
        Cover::truncate();

        Cover::create(['name' => 'Image Wrap']);
        Cover::create(['name' => 'Leather']);
        Cover::create(['name' => 'Photo']);
        Cover::create(['name' => 'Acrylic Cameo']);
        Cover::create(['name' => 'Canvas']);
        Cover::create(['name' => 'Full Acrylic']);
        Cover::create(['name' => 'Linen']);
        Cover::create(['name' => 'Print On Wood']);
        Cover::create(['name' => 'Print On Leather']);
    }
}
