<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FootwearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footwears')->insert([
            'name' => 'shoes',
            'description' =>'white shoes',
            'price' => '500',
            'image' => 'cat-img-2.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        DB::table('footwears')->insert([
            'name' => 'shoes',
            'description' =>'black shoes',
            'price' => '500',
            'image' => 'product-2.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        DB::table('footwears')->insert([
            'name' => 'shoes',
            'description' =>'red shoes',
            'price' => '500',
            'image' => 'product-6.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        DB::table('footwears')->insert([
            'name' => 'shoes',
            'description' =>'white shoes',
            'price' => '500',
            'image' => 'product-11.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        DB::table('footwears')->insert([
            'name' => 'shoes',
            'description' =>'white shoes',
            'price' => '500',
            'image' => 'product-2.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        DB::table('footwears')->insert([
            'name' => 'shoes',
            'description' =>'black shoes',
            'price' => '500',
            'image' => 'product-6.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        DB::table('footwears')->insert([
            'name' => 'shoes',
            'description' =>'silver shoes',
            'price' => '500',
            'image' => 'cat-img-2.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
    }
}
