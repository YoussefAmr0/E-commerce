<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'name' => 'shoes',
            'description' =>'white shoes',
            'old_price' => '500',
            'new_price' => '300',
            'sale_percent' => '15%',
            'image' => 'cat-img-2.jpg',
            'created_at' =>now(),
        ]);
        DB::table('sales')->insert([
            'name' => 'shoes',
            'description' =>'black shoes',
            'old_price' => '500',
            'new_price' => '300',
            'sale_percent' => '20%',
            'image' => 'product-2.jpg',
            'created_at' =>now(),
        ]);
        DB::table('sales')->insert([
            'name' => 'shoes',
            'description' =>'white shoes',
            'old_price' => '500',
            'new_price' => '200',
            'sale_percent' => '30%',
            'image' => 'product-6.jpg',
            'created_at' =>now(),
        ]);
        DB::table('sales')->insert([
            'name' => 'jacket',
            'description' =>'red jacket',
            'old_price' => '500',
            'new_price' => '150',
            'sale_percent' => '60%',
            'image' => 'layer 17.png',
            'created_at' =>now(),
        ]);
        DB::table('sales')->insert([
            'name' => 'jacket',
            'description' =>'blue jacket',
            'old_price' => '500',
            'new_price' => '300',
            'sale_percent' => '20%',
            'image' => 'layer 9.png',
            'created_at' =>now(),
        ]);
        DB::table('sales')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'old_price' => '500',
            'new_price' => '300',
            'sale_percent' => '20%',
            'image' => 'layer 19.png',
            'created_at' =>now(),
        ]);
        DB::table('sales')->insert([
            'name' => 'jacket',
            'description' =>'black jacket',
            'old_price' => '500',
            'new_price' => '300',
            'sale_percent' => '20%',
            'image' => 'layer 251.png',
            'created_at' =>now(),
        ]);
        DB::table('sales')->insert([
            'name' => 'watch',
            'description' =>'dark watch',
            'old_price' => '500',
            'new_price' => '300',
            'sale_percent' => '20%',
            'image' => 'product-detail-2.jpg',
            'created_at' =>now(),
        ]);
        DB::table('sales')->insert([
            'name' => 'camera',
            'description' =>'silver camera',
            'old_price' => '500',
            'new_price' => '400',
            'sale_percent' => '10%',
            'image' => 'product-10.jpg',
            'created_at' =>now(),
        ]);
    }
}
