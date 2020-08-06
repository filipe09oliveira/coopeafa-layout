<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Culturas;

class CulturasController extends Controller
{
    public function index()
    {
        $culturas = Culturas::orderBy('created_at', 'desc')->paginate(10);
        return response()->json([
            'res' => $culturas
        ], 201);

    }

    public function store(Request $request)
    {
        $culturas = new Culturas();
        $culturas->nome           = $request->nome;
        $culturas->hectaries      = $request->hectaries;
        $culturas->date           = $request->date;
        $culturas->propriedade    = $request->propriedade;
        $culturas->colheita       = $request->colheita;
        $culturas->save();
        return response()->json([
            'res' => 'Criado com sucesso'
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $culturas = Culturas::findOrFail($id);
        $culturas->nome           = $request->nome;
        $culturas->hectaries      = $request->hectaries;
        $culturas->date           = $request->date;
        $culturas->propriedade    = $request->propriedade;
        $culturas->colheita       = $request->colheita;
        $culturas->save();
        return response()->json([
            'res' => 'Alterado com sucesso'
        ], 201);
    }

    public function delete($id)
    {
        $culturas = Culturas::findOrFail($id);
        $culturas->delete();
        return response()->json([
            'res' => 'Deletado com sucesso'
        ], 201);
    }
}
