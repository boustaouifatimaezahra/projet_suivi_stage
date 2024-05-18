<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectionRegionaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('direction_regionale')->insert([
            'id_direction' => 1,
            'nom' => 'DRAA TAFILAT',
        ]);
    }
}
