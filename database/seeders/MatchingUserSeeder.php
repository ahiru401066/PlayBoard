<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MatchingUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matching_user')->insert([
                'matching_id' => 1,
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
