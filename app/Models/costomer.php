<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costomer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "phone_no",
        "email",
        "password",
        "state",
        "country",
        "default_address",
        "status"
    ];
}
