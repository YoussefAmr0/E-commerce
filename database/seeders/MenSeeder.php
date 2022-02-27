<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'layer 15.png',
            'created_at' =>now(),
        ]);
        DB::table('mens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'layer 17.png',
            'created_at' =>now(),
        ]);
        DB::table('mens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'layer 18.png',
            'created_at' =>now(),
        ]);
        DB::table('mens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'layer 19.png',
            'created_at' =>now(),
        ]);
        DB::table('mens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'layer 25.png',
            'created_at' =>now(),
        ]);
        DB::table('mens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'layer 121.png',
            'created_at' =>now(),
        ]);
        DB::table('mens')->insert([
            'name' => 'jacket',
            'description' =>'white jacket',
            'price' => '200',
            'image' => 'nn.png',
            'created_at' =>now(),
        ]);
    }
}
