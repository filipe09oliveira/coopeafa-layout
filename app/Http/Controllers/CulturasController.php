<?php

namespace App\Http\Controllers;

use App\Colheitas;
use Illuminate\Http\Request;
use App\Culturas;
use App\Propriedades;

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


    // CONTROLLERS DA APLICAÇÃO WEB //
    public function culturasindex()
    {
        $cultura = Culturas::all();
        return view('culturas', compact('cultura'));
    }

    public function create()
    {
        $propriedade = Propriedades::all();
        $colheita = Colheitas::all();
        return view('culturacreate', compact('propriedade', 'colheita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function culturastore(Request $request)
    {
        $cultura = new Culturas();
        $cultura->nome           = $request->input('nome');
        $cultura->hectaries      = $request->input('hectaries');
        $cultura->propriedade_id = $request->input('propriedade_id');
        $cultura->colheita_id    = $request->input('colheita_id');
        $cultura->save();
        return redirect('/culturas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cultura = Culturas::find($id);
        $propriedade = Propriedades::all();
        $colheita = Colheitas::all();

        if (isset($cultura)) {
            return view('culturaedit', compact('cultura', 'propriedade', 'colheita'));
        }
        return redirect('/culturas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function culturaupdate(Request $request, $id)
    {
        $cultura = Culturas::find($id);
        if (isset($cultura)) {
            $cultura->nome           = $request->input('nome');
            $cultura->hectaries      = $request->input('hectaries');
            $cultura->propriedade_id = $request->input('propriedade_id');
            $cultura->colheita_id    = $request->input('colheita_id');
            $cultura->save();
        }
        return redirect('/culturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cultura = Culturas::find($id);
        if (isset($cultura)) {
            $cultura->delete();
        }

        return redirect('/culturas');
    }
}
