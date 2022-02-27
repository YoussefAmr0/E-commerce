<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('12345678'),
            'role_as' => "1",
            'created_at' =>now(),
        ]);
        DB::table('users')->insert([
            'name' => "moderator",
            'email' => "moderator@gmail.com",
            'password' => Hash::make('12345678'),
            'role_as' => "2",
            'created_at' =>now(),
        ]);
        DB::table('users')->insert([
            'name' => "user",
            'email' => "user@gmail.com",
            'password' => Hash::make('12345678'),
            'role_as' => "0",
            'created_at' =>now(),
        ]);
    }
}
