<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
                'name' => 'test',
                'email' => 'test@test',
                'password' => 'testtest',
                'age' => '21',
                'role' => 'test',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
    }
}
