<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
                'user_id' => 1,
                'name' => 'testarea',
                'comment' => 'これはコメントです',
                'rate' => 5,
                'site_url' => 'orz',
                'locate' => 'wwwwwwwwwww',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
    }
}
