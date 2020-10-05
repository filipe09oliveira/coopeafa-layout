<?php

namespace App\Http\Controllers;

use App\Culturas;
use Illuminate\Http\Request;
use App\Colheitas;
use App\Transportadora;

class TransportadoraController extends Controller
{
    public function index()
    {
        $transportadora = Transportadora::all();
        return response()->json(
            $transportadora
        , 201);

    }


    public function store(Request $request)
    {
        $transportadora = new Transportadora();
        $transportadora->razao_social = $request->razao_social;
        $transportadora->telefone = $request->telefone;
        $transportadora->cnpj = $request->cnpj;
        $transportadora->i_estadual = $request->i_estadual;
        $transportadora->endereco = $request->endereco;
        $transportadora->bairro = $request->bairro;
        $transportadora->cep = $request->cep;
        $transportadora->cidade = $request->cidade;
        $transportadora->save();
        return response()->json([
            'res' => 'Criado com sucesso'
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $transportadora = Transportadora::findOrFail($id);
        $transportadora->razao_social = $request->razao_social;
        $transportadora->telefone = $request->telefone;
        $transportadora->cnpj = $request->cnpj;
        $transportadora->i_estadual = $request->i_estadual;
        $transportadora->endereco = $request->endereco;
        $transportadora->bairro = $request->bairro;
        $transportadora->cep = $request->cep;
        $transportadora->cidade = $request->cidade;
        $transportadora->save();
        return response()->json([
            'res' => 'Alterado com sucesso'
        ], 201);
    }

    public function delete($id)
    {
        $transportadora = Transportadora::findOrFail($id);
        $transportadora->delete();
        return response()->json([
            'res' => 'Deletado com sucesso'
        ], 201);
    }




///////// CONTROLLERS DA APLICAÇÃO WEB /////////
    public function transportadoraindex()
    {
        $transportadora = Transportadora::all();
        return view('transportadoras', compact('transportadora'));
    }

    public function create()
    {
        return view('transportadoracreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function transportadorastore(Request $request)
    {
        $transportadora = new Transportadora();
        $transportadora->razao_social = $request->input('razao_social');
        $transportadora->telefone = $request->input('telefone');
        $transportadora->cnpj = $request->input('cnpj');
        $transportadora->i_estadual = $request->input('i_estadual');
        $transportadora->endereco = $request->input('endereco');
        $transportadora->bairro = $request->input('bairro');
        $transportadora->cep = $request->input('cep');
        $transportadora->cidade = $request->input('cidade');
        $transportadora->save();
        return redirect('/transportadoras');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transportadora = Transportadora::find($id);
        if (isset($transportadora)) {
            return view('transportadoraedit', compact('transportadora'));
        }
        return redirect('/transportadoras');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function transportadoraupdate(Request $request, $id)
    {
        $transportadora = Transportadora::find($id);
        if (isset($transportadora)) {
            $transportadora->razao_social = $request->input('razao_social');
            $transportadora->telefone = $request->input('telefone');
            $transportadora->cnpj = $request->input('cnpj');
            $transportadora->i_estadual = $request->input('i_estadual');
            $transportadora->endereco = $request->input('endereco');
            $transportadora->bairro = $request->input('bairro');
            $transportadora->cep = $request->input('cep');
            $transportadora->cidade = $request->input('cidade');
            $transportadora->save();
        }
        return redirect('/transportadoras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transportadora = Transportadora::find($id);
        if (isset($transportadora)) {
            $transportadora->delete();
        }

        return redirect('/transportadoras');
    }
}