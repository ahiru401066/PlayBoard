<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
                'name' => 'ボードゲーム1',
                'body' => 'ボードゲーム1の説明です！',
                'level' => 'Easy',
                'category_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('games')->insert([
                'name' => 'ボードゲーム2',
                'body' => 'ボードゲーム2の説明です！',
                'level' => 'Normal',
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'ボードゲーム3',
                'body' => 'ボードゲーム3の説明です！',
                'level' => 'Normal',
                'category_id' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'ボードゲーム4',
                'body' => 'ボードゲーム4の説明です！',
                'level' => 'Hard',
                'category_id' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'ボードゲーム5',
                'body' => 'ボードゲーム5の説明です！',
                'level' => 'easy',
                'category_id' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
            
    }
}
