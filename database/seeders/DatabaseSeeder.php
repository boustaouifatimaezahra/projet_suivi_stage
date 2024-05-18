<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DirectionRegionaleSeeder::class);
        $this->call(DirecteurSeeder::class);
        $this->call(FormateurSeeder::class);
        $this->call(EtablissementSeeder::class);
        $this->call(UtilisateurSeeder::class);
    }
}
