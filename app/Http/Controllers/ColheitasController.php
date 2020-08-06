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
    public function colheitasindex()
    {
        $colhei = Colheitas::all();
        return view('colheitas', compact('colhei'));
    }

    public function create()
    {
        return view('colheitas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function colheitastore(Request $request)
    {
        $colhei = new Colheitas();
        $colhei->produto           = $request->input('produto');
        $colhei->unidade           = $request->input('unidade');
        $colhei->date              = $request->input('date');
        $colhei->peso              = $request->input('peso');
        $colhei->quantidade        = $request->input('quantidade');
        $colhei->perda             = $request->input('perda');
        $colhei->transportador     = $request->input('transportador');
        $colhei->comprador         = $request->input('comprador');
        $colhei->save();
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
        $colhei = Colheitas::find($id);
        if (isset($colhei)) {
            return view('colheitaedit', compact('colhei'));
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
    public function culturaupdate(Request $request, $id)
    {
        $colhei = Colheitas::find($id);
        if (isset($colhei)) {
            $colhei->produto           = $request->input('produto');
            $colhei->unidade           = $request->input('unidade');
            $colhei->date              = $request->input('date');
            $colhei->peso              = $request->input('peso');
            $colhei->quantidade        = $request->input('quantidade');
            $colhei->perda             = $request->input('perda');
            $colhei->transportador     = $request->input('transportador');
            $colhei->comprador         = $request->input('comprador');
            $colhei->save();
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
        $colhei = Colheitas::find($id);
        if (isset($colhei)) {
            $colhei->delete();
        }

        return redirect('/colheitas');
    }
}
