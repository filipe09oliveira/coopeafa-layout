<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propriedades;
use App\TipoPropriedade;

class PropriedadesController extends Controller
{
    public function index()
    {
        $propriedades = Propriedades::all();
        return response()->json(
            $propriedades
        , 201);

    }

    public function store(Request $request)
    {
        $propriedades = new Propriedades();
        $propriedades->cafir             = $request->cafir;
        $propriedades->tipo_propriedade  = $request->tipo_propriedade;
        $propriedades->tamanho           = $request->tamanho;
        $propriedades->rua               = $request->rua;
        $propriedades->bairro            = $request->bairro;
        $propriedades->cep               = $request->cep;
        $propriedades->numero            = $request->numero;
        $propriedades->complemento       = $request->complemento;
        $propriedades->contrato          = $request->contrato;
        $propriedades->save();
        return response()->json([
            'res' => 'Criado com sucesso'
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $propriedades = Propriedades::findOrFail($id);
        $propriedades->cafir             = $request->cafir;
        $propriedades->tipo_propriedade  = $request->tipo_propriedade;
        $propriedades->tamanho           = $request->tamanho;
        $propriedades->rua               = $request->rua;
        $propriedades->bairro            = $request->bairro;
        $propriedades->cep               = $request->cep;
        $propriedades->numero            = $request->numero;
        $propriedades->complemento       = $request->complemento;
        $propriedades->contrato          = $request->contrato;
        $propriedades->save();
        return response()->json([
            'res' => 'Alterado com sucesso'
        ], 201);
    }

    public function delete($id)
    {
        $propriedades = Propriedades::findOrFail($id);
        $propriedades->delete();
        return response()->json([
            'res' => 'Deletado com sucesso'
        ], 201);
    }



    // CONTROLLERS DA APLICAÇÃO WEB //
    public function propriedadesindex()
    {
        $proprie = Propriedades::all();
        return view('propriedades', compact('proprie'));
    }

    public function create()
    {
        $tipo = TipoPropriedade::all();
        return view('propriedadecreate', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function propriedadestore(Request $request)
    {
        $proprie = new Propriedades();
        $proprie->cafir = $request->input('cafir');
        $proprie->tipo_propriedade = $request->input('tipo_propriedade');
        $proprie->tamanho = $request->input('tamanho');
        $proprie->rua = $request->input('rua');
        $proprie->bairro = $request->input('bairro');
        $proprie->cep = $request->input('cep');
        $proprie->cidade = $request->input('cidade');
        $proprie->numero = $request->input('numero');
        $proprie->complemento = $request->input('complemento');
        $proprie->contrato = $request->input('contrato');
        $proprie->save();
        return redirect('/propriedades');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proprie = Propriedades::find($id);
        $tipo = TipoPropriedade::all();
        if (isset($proprie)) {
            return view('propriedadeedit', compact('proprie', 'tipo'));
        }
        return redirect('/propriedades');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function propriedadeupdate(Request $request, $id)
    {
        $proprie = Propriedades::find($id);
        if (isset($proprie)) {
            $proprie->cafir = $request->input('cafir');
            $proprie->tipo_propriedade = $request->input('tipo_propriedade');
            $proprie->tamanho = $request->input('tamanho');
            $proprie->rua = $request->input('rua');
            $proprie->bairro = $request->input('bairro');
            $proprie->cep = $request->input('cep');
            $proprie->cidade = $request->input('cidade');
            $proprie->numero = $request->input('numero');
            $proprie->complemento = $request->input('complemento');
            $proprie->contrato = $request->input('contrato');
            $proprie->save();
        }
        return redirect('/propriedades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proprie = Propriedades::find($id);
        if (isset($proprie)) {
            $proprie->delete();
        }

        return redirect('/propriedades');
    }
}
