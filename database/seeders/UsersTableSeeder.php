<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([

            // Admin
            [
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('12345678'),
                'phone' => '1234567890',
                'address' => 'Admin Address',
                'status' => 1,
                'photo' => 'user.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => Hash::make('12345678'),
                'phone' => '5555555555',
                'address' => 'User Address',
                'status' => 1,
                'photo' => 'user.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
