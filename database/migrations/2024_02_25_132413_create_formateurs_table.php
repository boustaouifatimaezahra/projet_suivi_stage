<?php

// database/migrations/[timestamp]_create_formateurs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormateursTable extends Migration
{
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id('id_formateur');
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedBigInteger('directeur_id'); // Clé étrangère
            $table->timestamps();
            $table->foreign('directeur_id')->references('id')->on('directeurs');
            $table->unsignedBigInteger('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateur');

        });
    }

    public function down()
    {
        Schema::dropIfExists('formateurs');
    }
}