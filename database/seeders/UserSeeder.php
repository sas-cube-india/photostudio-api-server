<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $superadmin = User::create([
            'name'              => 'Super Admin',
            'phone'             => '+91 14 50563232',
            'email'             => 'admin@demo.com',
            'password'          => Hash::make('admin@123'),
            'role'              => 'admin',
            'email_verified_at' => \now(),
        ]);

    }
}
