<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            [
                'verification' => '123456',
                'fullname' => 'Ngô Giang Nam',
                'email' => 'gutentagslave@gmail.com',
                'status' => '1',
            ],
            [
                'verification' => '456789',
                'fullname' => 'Nguyễn Minh Trương',
                'email' => 'gutentagslaved@gmail.com',
                'status' => '0',
            ],
        ]);
    }
}
