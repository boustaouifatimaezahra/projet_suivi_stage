<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directeurs')->insert([
            'nom'=>'ICHRAK ELHAKIMI',
            'utilisateur_id'=>2, 
        ]);
    }
}
