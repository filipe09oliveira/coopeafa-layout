<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TipoPropriedade;
use Illuminate\Database\Eloquent\SoftDeletes;

class Propriedades extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'cafir',
        'tipo_propriedade',
        'tamanho',
        'rua', 
        'bairro', 
        'cep', 
        'cidade', 
        'numero', 
        'complemento', 
        'contrato'
    ];

    protected $guarded = [
        'id', 
        'created_at',
         'update_at',
         'deleted_at',
        ];
        
    protected $table = 'propriedades';

    public function tipo() {
        return $this->hasOne(TipoPropriedade::class, 'id', 'tipo_propriedade');
    }
}