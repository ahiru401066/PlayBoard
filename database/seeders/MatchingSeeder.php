<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MatchingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matchings')->insert([
                'date' => '2000/00/00',
                'category_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
    }
}
