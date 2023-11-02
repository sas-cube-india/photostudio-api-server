<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_no',
        'email',
        'password',
        'compunys_name',
        'compunys_logo',
        'social_link',
        'social_link',
        'address',
        'state',
        'country',
        'email_veryfi',
        'phone_veryfi',
        'status',
        'pricing_formate',
    ];
}
