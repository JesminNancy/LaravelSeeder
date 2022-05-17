<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            
            'name'=>Str::random(20),
            'class' => Str::random(5),
            'roll' =>Str::random(6),
            'city'=>Str::random(5)
        
        ]);
    }
}
