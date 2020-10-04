<?php

namespace App\Http\Controllers;

use App\Culturas;
use Illuminate\Http\Request;
use App\Colheitas;
use App\TipoPropriedade;

class TipoPropriedadeController extends Controller
{
    public function index()
    {
        $tipoPropriedade = TipoPropriedade::all();
        return response()->json(
            $tipoPropriedade
        , 201);

    }


    public function store(Request $request)
    {
        $tipoPropriedade = new TipoPropriedade();
        $tipoPropriedade->descricao     = $request->descricao;
        $tipoPropriedade->save();
        return response()->json([
            'res' => 'Criado com sucesso'
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $tipoPropriedade = TipoPropriedade::findOrFail($id);
        $tipoPropriedade->descricao     = $request->descricao;
        $tipoPropriedade->save();
        return response()->json([
            'res' => 'Alterado com sucesso'
        ], 201);
    }

    public function delete($id)
    {
        $tipoPropriedade = TipoPropriedade::findOrFail($id);
        $tipoPropriedade->delete();
        return response()->json([
            'res' => 'Deletado com sucesso'
        ], 201);
    }




    // CONTROLLERS DA APLICAÇÃO WEB //
    public function tipoPropriedadeindex()
    {
        $tipoPropriedade = TipoPropriedade::all();
        return view('tipoPropriedades', compact('tipoPropriedade'));
    }

    public function create()
    {
        return view('tipoPropriedadecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tipoPropriedadestore(Request $request)
    {
        $tipoPropriedade = new TipoPropriedade();
        $tipoPropriedade->descricao = $request->input('descricao');
        $tipoPropriedade->save();
        return redirect('/tipoPropriedades');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoPropriedade = TipoPropriedade::find($id);
        if (isset($tipoPropriedade)) {
            return view('tipoPropriedadeedit', compact('tipoPropriedade'));
        }
        return redirect('/tipoPropriedades');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tipoPropriedadeupdate(Request $request, $id)
    {
        $tipoPropriedade = TipoPropriedade::find($id);
        if (isset($tipoPropriedade)) {
            $tipoPropriedade->descricao = $request->input('descricao');
            $tipoPropriedade->save();
        }
        return redirect('/tipoPropriedades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoPropriedade = TipoPropriedade::find($id);
        if (isset($tipoPropriedade)) {
            $tipoPropriedade->delete();
        }

        return redirect('/tipoPropriedades');
    }
}
