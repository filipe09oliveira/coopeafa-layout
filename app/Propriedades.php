<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propriedades extends Model
{
    protected $fillable = ['cafir','tipo','tamanho','rua', 'bairro', 'cep', 'cidade', 'numero', 'complemento', 'contrato'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'propriedades';
}
