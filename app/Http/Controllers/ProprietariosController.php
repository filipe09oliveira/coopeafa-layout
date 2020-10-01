<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proprietarios;

class ProprietariosController extends Controller
{

    public function index()
    {
        $proprietarios = Proprietarios::orderBy('created_at', 'desc')->paginate(10);
        return response()->json([
            'res' => $proprietarios
        ], 201);

    }

    public function store(Request $request)
    {
        $proprietarios = new Proprietarios();
        $proprietarios->name             = $request->name;
        $proprietarios->surname          = $request->surname;
        $proprietarios->cpf              = $request->cpf;
        $proprietarios->date             = $request->date;
        $proprietarios->numeroDAP        = $request->numeroDAP;
        $proprietarios->validadeDAP      = $request->validadeDAP;
        $proprietarios->registro         = $request->registro;
        $proprietarios->password         = bcrypt($request->password);
        $proprietarios->save();
        return response()->json([
            'res' => 'Criado com sucesso'
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $proprietarios = Proprietarios::findOrFail($id);
        $proprietarios->name             = $request->name;
        $proprietarios->surname          = $request->surname;
        $proprietarios->cpf              = $request->cpf;
        $proprietarios->date             = $request->date;
        $proprietarios->numeroDAP        = $request->numeroDAP;
        $proprietarios->validadeDAP      = $request->validadeDAP;
        $proprietarios->registro         = $request->registro;
        $proprietarios->password         = bcrypt($request->password);
        $proprietarios->save();
        return response()->json([
            'res' => 'Alterado com sucesso'
        ], 201);
    }

    public function delete($id)
    {
        $proprietarios = Proprietarios::findOrFail($id);
        $proprietarios->delete();
        return response()->json([
            'res' => 'Deletado com sucesso'
        ], 201);
    }


    // CONTROLLERS DA APLICAÇÃO WEB //
    public function proprietariosindex()
    {
        $propri = Proprietarios::all();
        return view('proprietarios', compact('propri'));
    }

    public function create()
    {
        return view('proprietariocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proprietariostore(Request $request)
    {
        $proprietarios = new Proprietarios();
        $proprietarios->name = $request->input('name');
        $proprietarios->surname = $request->input('surname');
        $proprietarios->cpf = $request->input('cpf');
        $proprietarios->numeroDAP = $request->input('numeroDAP');
        $proprietarios->validadeDAP = $request->input('validadeDAP');
        $proprietarios->registro = $request->input('registro');
        $proprietarios->password  = $request->input('password');
        $proprietarios->save();
        return redirect('/proprietarios');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propri = Proprietarios::find($id);
        if (isset($propri)) {
            return view('proprietarioedit', compact('propri'));
        }
        return redirect('/proprietarios');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function proprietarioupdate(Request $request, $id)
    {
        $proprietario = Proprietarios::find($id);
        if (isset($proprietario)) {
            $proprietario->name = $request->input('name');
            $proprietario->surname = $request->input('surname');
            $proprietario->cpf = $request->input('cpf');
            $proprietario->numeroDAP = $request->input('numeroDAP');
            $proprietario->validadeDAP = $request->input('validadeDAP');
            $proprietario->registro = $request->input('registro');
            $proprietario->save();
        }
        return redirect('/proprietarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proprietario = Proprietarios::find($id);
        if (isset($proprietario)) {
            $proprietario->delete();
        }

        return redirect('/proprietarios');
    }
}
