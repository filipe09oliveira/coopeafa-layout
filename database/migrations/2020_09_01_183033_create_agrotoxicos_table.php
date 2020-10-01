<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgrotoxicosTable extends Migration
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
            $table->unsignedBigInteger('cultura_id');
            $table->foreign('cultura_id')->references('id')->on('culturas');

            $table->string('canteiro');
            $table->string('produto');
            $table->string('aplicacao');
            $table->decimal('dosagem');
            $table->decimal('volume');
            $table->string('indicacao');
            $table->string('carencia');
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
        Schema::dropIfExists('agrotoxicos');
    }
}
