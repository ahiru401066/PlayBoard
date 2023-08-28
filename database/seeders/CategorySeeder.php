<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'category' => '1対1対戦',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
                'category' => '個人戦',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
                'category' => 'チーム戦',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
                'category' => '協力',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
