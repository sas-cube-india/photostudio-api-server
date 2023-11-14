<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasApiTokens, CanResetPassword;

    const CLIENT = 'client';
    const ADMIN  = 'admin';

    protected $guarded = ['id'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $hidden = ['password', 'email_verified_at'];
}
