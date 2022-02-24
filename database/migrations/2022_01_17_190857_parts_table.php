<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('marka');
            $table->string('model');
            $table->string('godina');
            $table->string('dioAuta');
            $table->string('imeDijela');
            $table->string('stanje');
            $table->string('cijena');
            $table->string('sifra');
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
        Schema::dropIfExists('parts');
    }
}
