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
                'title' => 'ボードゲーム1',
                'body' => 'ボードゲーム1の説明です！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('games')->insert([
                'title' => 'ボードゲーム2',
                'body' => 'ボードゲーム2の説明です!',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'title' => 'ボードゲーム3',
                'body' => 'ボードゲーム3の説明です!',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'title' => 'ボードゲーム4',
                'body' => 'ボードゲーム4の説明です!',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'title' => 'ボードゲーム5',
                'body' => 'ボードゲーム5の説明です!',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'title' => 'ボードゲーム6',
                'body' => 'ボードゲーム6の説明です!',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
            
    }
}
