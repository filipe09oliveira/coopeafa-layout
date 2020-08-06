<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlador extends Controller
{
    public function index(){
        return response()->json([
            ['id' => 1, 'nome' => 'Mouse'],
            ['id' => 2, 'nome' => 'Teclado'],
            ['id' => 3, 'nome' => 'CPU'],
            ['id' => 4, 'nome' => 'Monitor'],
            ['id' => 5, 'nome' => 'Placa Mãe'],
            ['id' => 6, 'nome' => 'Placa de Video'],
            ['id' => 7, 'nome' => 'Câmera']
        ]);
    }
}
