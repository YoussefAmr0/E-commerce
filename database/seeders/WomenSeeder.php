<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WomenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('womens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'hh.png',
            'created_at' =>now(),
        ]);
        DB::table('womens')->insert([
            'name' => 'jacket',
            'description' =>'dark jacket',
            'price' => '200',
            'image' => 'layer 7.png',
            'created_at' =>now(),
        ]);
        DB::table('womens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'layer 9.png',
            'created_at' =>now(),
        ]);
        DB::table('womens')->insert([
            'name' => 'jacket',
            'description' =>'blue jacket',
            'price' => '200',
            'image' => 'layer 8.png',
            'created_at' =>now(),
        ]);
        DB::table('womens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'layer 14.png',
            'created_at' =>now(),
        ]);
        DB::table('womens')->insert([
            'name' => 'jacket',
            'description' =>'black jacket',
            'price' => '200',
            'image' => 'layer 24.png',
            'created_at' =>now(),
        ]);
        DB::table('womens')->insert([
            'name' => 'jacket',
            'description' =>'yellow jacket',
            'price' => '200',
            'image' => 'layer 251.png',
            'created_at' =>now(),
        ]);
        DB::table('womens')->insert([
            'name' => 'jacket',
            'description' =>'red jacket',
            'price' => '200',
            'image' => 'woman.png',
            'created_at' =>now(),
        ]);
    }
}
