<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietarios extends Model
{
    protected $fillable = ['name','surname','cpf','date', 'numeroDAP', 'validadeDAP', 'registro', 'password'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'proprietarios';
}
