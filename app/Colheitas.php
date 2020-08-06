<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colheitas extends Model
{
    protected $fillable = ['produto','unidade','date','peso', 'quantidade', 'perda', 'transportador', 'comprador'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'colheitas';
}
