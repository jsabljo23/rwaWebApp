<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('marka');
            $table->string('model');
            $table->string('godina');
            $table->string('kilometraza');
            $table->string('vin');
            $table->string('boja');
            $table->string('transmisija');
            $table->string('gorivo');
            $table->string('klasa');
            $table->string('cijena');
            $table->string('korisnik');
            $table->integer('idKorisnika');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
