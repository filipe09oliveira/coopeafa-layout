<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colheitas extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'produto',
        'unidade',
        'peso',
        'quantidade',
        'perda',
        'transportador',
        'comprador'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'update_at',
        'deleted_at'
    ];

    protected $table = 'colheitas';
}
