<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agrotoxicos;

class AgrotoxicosController extends Controller
{
    public function index()
    {
        $agrotoxicos = Agrotoxicos::orderBy('created_at', 'desc')->paginate(10);
        return response()->json([
            'res' => $agrotoxicos
        ], 201);

    }

    public function store(Request $request)
    {
        $agrotoxicos = new Agrotoxicos();
        $agrotoxicos->cultura        = $request->cultura;
        $agrotoxicos->canteiro       = $request->canteiro;
        $agrotoxicos->date           = $request->date;
        $agrotoxicos->produto        = $request->produto;
        $agrotoxicos->aplicacao      = $request->aplicacao;
        $agrotoxicos->dosagem        = $request->dosagem;
        $agrotoxicos->volume         = $request->volume;
        $agrotoxicos->indicacao      = $request->indicacao;
        $agrotoxicos->carencia       = $request->carencia;
        $agrotoxicos->save();
        return response()->json([
            'res' => 'Criado com sucesso'
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $agrotoxicos = Agrotoxicos::findOrFail($id);
        $agrotoxicos->cultura        = $request->cultura;
        $agrotoxicos->canteiro       = $request->canteiro;
        $agrotoxicos->date           = $request->date;
        $agrotoxicos->produto        = $request->produto;
        $agrotoxicos->aplicacao      = $request->aplicacao;
        $agrotoxicos->dosagem        = $request->dosagem;
        $agrotoxicos->volume         = $request->volume;
        $agrotoxicos->indicacao      = $request->indicacao;
        $agrotoxicos->carencia       = $request->carencia;
        $agrotoxicos->save();
        return response()->json([
            'res' => 'Alterado com sucesso'
        ], 201);
    }

    public function delete($id)
    {
        $agrotoxicos = Agrotoxicos::findOrFail($id);
        $agrotoxicos->delete();
        return response()->json([
            'res' => 'Deletado com sucesso'
        ], 201);
    }
}
