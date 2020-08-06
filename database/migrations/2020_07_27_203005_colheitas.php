<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Colheitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colheitas', function (Blueprint $table) {
            $table->id();
            $table->string('produto');
            $table->string('unidade');
            $table->string('date');
            $table->string('peso');
            $table->string('quantidade');
            $table->string('perda');
            $table->string('transportador');
            $table->string('comprador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colheitas');
    }
}
