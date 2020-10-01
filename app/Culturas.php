<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Culturas extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'hectaries', 
        'propriedade_id', 
        'colheita_id'
    ];

    protected $guarded = [
        'id', 
        'created_at', 
        'update_at',
        'deleted_at',
    ];
    
    protected $table = 'culturas';

    public function propriedade() {
        return $this->hasOne(Propriedades::class, 'id', 'propriedade_id');
    }

    public function colheita() {
        return $this->hasOne(Colheitas::class, 'id', 'colheita_id');
    }
}
