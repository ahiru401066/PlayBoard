<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@admin',
                'password' => Hash::make('password'),
                'age' => '21',
                'role' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
        DB::table('users')->insert([
                'name' => 'user1',
                'email' => 'a@a',
                'password' => Hash::make('testtest'),
                'age' => '21',
                'role' => 0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
    }
}
