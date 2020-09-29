<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_propriedade extends Model
{
    protected $fillable = ['descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'tipo_propriedade';
}
