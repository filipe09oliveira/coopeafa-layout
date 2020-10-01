<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCulturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('culturas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('hectaries');

            $table->unsignedBigInteger('propriedade_id');
            $table->foreign('propriedade_id')->references('id')->on('propriedades');

            $table->unsignedBigInteger('colheita_id');
            $table->foreign('colheita_id')->references('id')->on('colheitas');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('culturas');
    }
}