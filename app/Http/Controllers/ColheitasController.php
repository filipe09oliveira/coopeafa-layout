<?php

namespace App\Http\Controllers;

use App\Culturas;
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




    // CONTROLLERS DA APLICAÇÃO WEB //
    public function colheitaindex()
    {
        $colhe = Colheitas::all();
        return view('colheitas', compact('colhe'));
    }

    public function create()
    {
        return view('colheitacreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function colheitastore(Request $request)
    {
        $colhe = new Colheitas();
        $colhe->produto           = $request->input('produto');
        $colhe->unidade           = $request->input('unidade');
        $colhe->peso              = $request->input('peso');
        $colhe->quantidade        = $request->input('quantidade');
        $colhe->perda             = $request->input('perda');
        $colhe->transportador     = $request->input('transportador');
        $colhe->comprador         = $request->input('comprador');
        $colhe->save();
        return redirect('/colheitas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colhe = Colheitas::find($id);
        if (isset($colhe)) {
            return view('colheitaedit', compact('colhe'));
        }
        return redirect('/colheitas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function colheitaupdate(Request $request, $id)
    {
        $colhe = Colheitas::find($id);
        if (isset($colhe)) {
            $colhe->produto           = $request->input('produto');
            $colhe->unidade           = $request->input('unidade');
            $colhe->peso              = $request->input('peso');
            $colhe->quantidade        = $request->input('quantidade');
            $colhe->perda             = $request->input('perda');
            $colhe->transportador     = $request->input('transportador');
            $colhe->comprador         = $request->input('comprador');
            $colhe->save();
        }
        return redirect('/colheitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colhe = Colheitas::find($id);
        if (isset($colhe)) {
            $colhe->delete();
        }

        return redirect('/colheitas');
    }
}
