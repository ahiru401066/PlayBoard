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
                'number' => '2 ~ 4',
                'game_time' => '20 ~ 40',
                'image_url' => 'image_url',
                'release' => '2000/00/00',
                'revel' => 'Easy',
                'category_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('games')->insert([
                'name' => 'ボードゲーム2',
                'body' => 'ボードゲーム2の説明です！',
                'number' => '2',
                'game_time' => '60',
                'image_url' => 'image_url',
                'release' => '2000/00/00',
                'revel' => 'Normal',
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'ボードゲーム3',
                'body' => 'ボードゲーム3の説明です！',
                'number' => '6',
                'game_time' => '20 ~ 40',
                'image_url' => 'image_url',
                'release' => '2000/00/00',
                'revel' => 'Normal',
                'category_id' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'ボードゲーム4',
                'body' => 'ボードゲーム4の説明です！',
                'number' => '2',
                'game_time' => '20 ~ 40',
                'image_url' => 'image_url',
                'release' => '2000/00/00',
                'revel' => 'Hard',
                'category_id' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'ボードゲーム5',
                'body' => 'ボードゲーム5の説明です！',
                'number' => '2 ~ 4',
                'game_time' => '20 ~ 40',
                'image_url' => 'image_url',
                'release' => '2000/00/00',
                'revel' => 'easy',
                'category_id' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
            
    }
}
