<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culturas extends Model
{
    protected $fillable = ['name','hectaries','date','propriedade', 'colheita'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'culturas';
}
