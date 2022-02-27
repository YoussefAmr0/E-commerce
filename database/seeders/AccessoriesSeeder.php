<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Accessories')->insert([
            'name' => 'watch',
            'description' =>'silver watch',
            'price' => '200',
            'image' => 'product-4.jpg',
            'created_at' =>now(),
        ]);
        DB::table('Accessories')->insert([
            'name' => 'smart watch',
            'description' =>'red watch',
            'price' => '200',
            'image' => 'product-5.jpg',
            'created_at' =>now(),
        ]);
        DB::table('Accessories')->insert([
            'name' => 'watch',
            'description' =>'silver watch',
            'price' => '200',
            'image' => 'product-10.jpg',
            'created_at' =>now(),
        ]);
        DB::table('Accessories')->insert([
            'name' => 'camera',
            'description' =>'white camera',
            'price' => '200',
            'image' => 'product-9.jpg',
            'created_at' =>now(),
        ]);
        
        DB::table('Accessories')->insert([
            'name' => 'smart watch',
            'description' =>'black watch',
            'price' => '200',
            'image' => 'product-detail-2.jpg',
            'created_at' =>now(),
        ]);
        DB::table('Accessories')->insert([
            'name' => 'smart watch',
            'description' =>'black watch',
            'price' => '200',
            'image' => 'product-detail-4.jpg',
            'created_at' =>now(),
        ]);
    }
}
