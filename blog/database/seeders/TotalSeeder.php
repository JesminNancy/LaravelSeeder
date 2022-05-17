<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
use Illuminate\Support\Facades\DB;

class TotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        
            studentSeeder::class ,
            examMarksSeeder::class ,
            UserSeeder::class,
        ]);
    }
}
