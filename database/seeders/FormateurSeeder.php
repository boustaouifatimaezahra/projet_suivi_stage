<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formateurs')->insert([
            'id_formateur' => 1,
            'matricule' => '15685',
            'nom' => 'GAHI',
            'prenom' => 'SAID',
            'directeur_id'=>1,        
            'created_at' => now(),
            'updated_at' => now(),
            'utilisateur_id'=>2, 
        ]);
    }
}
