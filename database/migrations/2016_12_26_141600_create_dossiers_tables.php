<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossiersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_ca');
            $table->string('num_prescripteur');
            $table->integer('courtier_id')->unsigned();        
            $table->integer('emprunteur_id')->unsigned();        
            $table->integer('etat');
            $table->timestamps();

            $table->foreign('courtier_id')->references('id')->on('users');
            $table->foreign('emprunteur_id')->references('id')->on('emprunteurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
}
