<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart_details')->insert([
            [
                'theme_name' => 'Giao diện website bán quần áo',
                'price' => 200000,
                'thumbnail' => 'a1.jpg',
            ],
            [
                'theme_name' => 'Giao diện website bán giày',
                'price' => 300000,
                'thumbnail' => 'a2.jpg',
            ],
        ]);
    }
}
