<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Sofa Minimalis',
                'description' => 'Sofa minimalis dengan bahan berkualitas',
                'price' => 2500000,
                'stock' => 10,
                'image' => 'sofa.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Meja Makan',
                'description' => 'Meja makan kayu jati',
                'price' => 3000000,
                'stock' => 5,
                'image' => 'meja_makan.jpg',
                'category_id' => 2,
            ],
            // Tambahkan produk lainnya
        ]);
    }
}

