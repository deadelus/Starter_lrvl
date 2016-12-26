<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiafTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piaf', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['CNI','MANDAT','SIM', 'FUS']);
            $table->integer('dossier_id')->unsigned();
            $table->integer('ajouter_par')->unsigned();
            $table->timestamps();

            $table->foreign('dossier_id')->references('id')->on('dossiers');
            $table->foreign('ajouter_par')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('piaf');
    }
}
