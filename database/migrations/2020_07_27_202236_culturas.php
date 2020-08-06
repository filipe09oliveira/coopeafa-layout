<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Culturas extends Migration
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
            $table->string('hectaries');
            $table->string('date');
            $table->string('propriedade');
            $table->date('colheita');
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
