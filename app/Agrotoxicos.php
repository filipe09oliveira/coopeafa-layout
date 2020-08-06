<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agrotoxicos extends Model
{
    protected $fillable = ['cultura','canteiro','date','produto', 'aplicacao', 'dosagem', 'volume', 'indicacao', 'carencia'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'agrotoxicos';
}
