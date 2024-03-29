<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proprietarios extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'surname',
        'cpf',
        'numeroDAP', 
        'validadeDAP', 
        'registro', 
        'password'
    ];

    protected $guarded = [
        'id', 
        'created_at', 
        'update_at',
        'deleted_at',
    ];

    protected $table = 'proprietarios';
}
