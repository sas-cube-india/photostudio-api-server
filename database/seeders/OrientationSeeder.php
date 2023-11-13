<?php

namespace Database\Seeders;

use App\Models\Orientation;
use Illuminate\Database\Seeder;

class OrientationSeeder extends Seeder
{
    public function run()
    {
        $square_orientation = Orientation::create(['name' => 'Square (HxW)']);
        $square_orientation->sizes()->create(['height' => 8, 'width' => 8]);
        $square_orientation->sizes()->create(['height' => 10, 'width' => 10]);
        $square_orientation->sizes()->create(['height' => 12, 'width' => 12]);
        $square_orientation->sizes()->create(['height' => 14, 'width' => 14]);
        $square_orientation->sizes()->create(['height' => 15, 'width' => 15]);

        $landscape_orientation = Orientation::create(['name' => 'Landscape (HxW)']);
        $landscape_orientation->sizes()->create(['height' => 8, 'width' => 10]);
        $landscape_orientation->sizes()->create(['height' => 8, 'width' => 12]);
        $landscape_orientation->sizes()->create(['height' => 10, 'width' => 12]);
        $landscape_orientation->sizes()->create(['height' => 11, 'width' => 14]);
        $landscape_orientation->sizes()->create(['height' => 12, 'width' => 15]);
        $landscape_orientation->sizes()->create(['height' => 12, 'width' => 16]);
        $landscape_orientation->sizes()->create(['height' => 12, 'width' => 18]);

        $portrait_orientation = Orientation::create(['name' => 'Portrait (HxW)']);
        $portrait_orientation->sizes()->create(['height' => 10, 'width' => 8]);
        $portrait_orientation->sizes()->create(['height' => 12, 'width' => 8]);
        $portrait_orientation->sizes()->create(['height' => 12, 'width' => 9]);
        $portrait_orientation->sizes()->create(['height' => 12, 'width' => 10]);
        $portrait_orientation->sizes()->create(['height' => 14, 'width' => 11]);
        $portrait_orientation->sizes()->create(['height' => 16, 'width' => 12]);
    }
}
