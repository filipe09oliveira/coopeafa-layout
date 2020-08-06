<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colheitas;

class ColheitasController extends Controller
{
    public function index()
    {
        $colheitas = Colheitas::all();
        return response()->json(
            $colheitas
        , 201);

    }


    public function store(Request $request)
    {
        $colheitas = new Colheitas();
        $colheitas->produto           = $request->produto;
        $colheitas->unidade           = $request->unidade;
        $colheitas->date              = $request->date;
        $colheitas->peso              = $request->peso;
        $colheitas->quantidade        = $request->quantidade;
        $colheitas->perda             = $request->perda;
        $colheitas->transportador     = $request->transportador;
        $colheitas->comprador         = $request->comprador;
        $colheitas->save();
        return response()->json([
            'res' => 'Criado com sucesso'
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $colheitas = Colheitas::findOrFail($id);
        $colheitas->produto           = $request->produto;
        $colheitas->unidade           = $request->unidade;
        $colheitas->date              = $request->date;
        $colheitas->peso              = $request->peso;
        $colheitas->quantidade        = $request->quantidade;
        $colheitas->perda             = $request->perda;
        $colheitas->transportador     = $request->transportador;
        $colheitas->comprador         = $request->comprador;
        $colheitas->save();
        return response()->json([
            'res' => 'Alterado com sucesso'
        ], 201);
    }

    public function delete($id)
    {
        $colheitas = Colheitas::findOrFail($id);
        $colheitas->delete();
        return response()->json([
            'res' => 'Deletado com sucesso'
        ], 201);
    }
}
