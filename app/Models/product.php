<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable=[
        'size',
        'product_orientation',
        'thermal_sheet',
        'white_sheet',
        'black_sheet',
        'image_wrap',
        'leather',
        'photo',
        'acrylic_cameo',
        'canvas',
        'leather_box',
        'photo_box',
        'linen_box',
        'leather_sleeve',
    ];
}
