<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('utilisateurs')->insert([
            'email' => 'ICHRAKELHAKIMI@gmail.com',
            'password' => bcrypt('ichrak123'),
            'type' => 'directeur',
        ]);
        DB::table('utilisateurs')->insert([
            'email' => 'GAHISAID@gmail.com',
            'password' => bcrypt('said123'),
            'type' => 'formateur',
        ]);
    }
}
