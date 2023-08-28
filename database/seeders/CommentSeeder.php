<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
                'comment' => 'これはコメントです',
                'user_id' => 1,
                'game_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
            ]);
            
    }
}
