<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'a@a.com',
                'email_verified_at' => now(),
                'password' => Hash::make('a'), // Ganti dengan password yang aman
                'role_id' => 1, // Asumsi 1 untuk admin
                'remember_token' => \Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular  User',
                'email' => 'userr@a.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Ganti dengan password yang aman
                'role_id' => 2, // Asumsi 2 untuk regular user
                'remember_token' => \Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => 'Moderator User',
            //     'email' => 'moderator@example.com',
            //     'email_verified_at' => now(),
            //     'password' => Hash::make('password'), // Ganti dengan password yang aman
            //     'role_id' => 3, // Asumsi 3 untuk moderator
            //     'remember_token' => \Str::random(10),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ]);
    }
}
