<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropriedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriedades', function (Blueprint $table) {
            $table->id();
            $table->string('cafir');
            $table->integer('tipo');
            $table->float('tamanho');
            $table->string('rua');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('cep');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('contrato');
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
        Schema::dropIfExists('propriedades');
    }
}
