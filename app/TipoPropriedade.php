<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPropriedade extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'descricao'
    ];

    protected $guarded = [
        'id', 
        'created_at', 
        'update_at',
        'deleted_at',
    ];

    protected $table = 'tipo_propriedade';
}
