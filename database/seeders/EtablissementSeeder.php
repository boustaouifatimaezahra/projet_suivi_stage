<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Etablissement')->insert([
            'id_etablissement' => 1,
            'nom_direction' => 'Ista OUARZAZATE',
            'id_direction' => 1,
        ]);
    }
}
