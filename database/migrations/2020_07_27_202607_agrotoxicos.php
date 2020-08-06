<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agrotoxicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agrotoxicos', function (Blueprint $table) {
            $table->id();
            $table->string('cultura');
            $table->string('canteiro');
            $table->string('date');
            $table->string('produto');
            $table->string('aplicacao');
            $table->string('dosagem');
            $table->string('volume');
            $table->string('indicacao');
            $table->string('carencia');
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
        Schema::dropIfExists('agrotoxicos');
    }
}
