<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColheitasTable extends Migration
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
            $table->decimal('peso');
            $table->integer('quantidade');
            $table->string('perda');
            $table->integer('transportador');
            $table->integer('comprador');
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
        Schema::dropIfExists('colheitas');
    }
}
