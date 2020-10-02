<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agrotoxicos extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'cultura_id',
        'canteiro',
        'date',
        'produto',
        'aplicacao',
        'dosagem',
        'volume',
        'indicacao',
        'carencia'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'update_at',
        'deleted_at',
    ];


    protected $table = 'agrotoxicos';
}
