<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sizes()
    {
        return $this->hasMany(OrientationSize::class);
    }
}
