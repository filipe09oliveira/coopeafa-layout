<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transportadora extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'descricao',
        'razao_social',
        'telefone',
        'cnpj',
        'i_estadual',
        'endereco',
        'bairro',
        'cep',
        'cidade',
    ];

    protected $guarded = [
        'id', 
        'created_at', 
        'update_at',
        'deleted_at',
    ];

    protected $table = 'transportadoras';
}