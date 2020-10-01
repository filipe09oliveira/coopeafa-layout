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
            
            $table->unsignedBigInteger('tipo_propriedade');
            $table->foreign('tipo_propriedade')->references('id')->on('tipo_propriedade');

            $table->decimal('tamanho');
            $table->string('rua');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('cep');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('contrato');
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
        Schema::dropIfExists('propriedades');
    }
}
