<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // RolesTableSeeder::class,
            // CategoriesTableSeeder::class,
            // ProductsTableSeeder::class,
            UserSeeder::class,
        ]);
    }
}

