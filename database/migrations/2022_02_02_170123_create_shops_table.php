<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('id_mehanicara');
            $table->string('mehanicar');
            $table->string('id_klijenta');
            $table->string('klijent');
            $table->string('ime');
            $table->string('email');
            $table->string('brojtel');
            $table->string('podatciVoz');
            $table->string('vinAuta');
            $table->string('objasnjene');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
