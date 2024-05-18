<?php // Dans le fichier create_directeurs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirecteursTable extends Migration
{
    public function up()
    {
        Schema::create('directeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateur');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('directeurs');
    }
}
