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




    // CONTROLLERS DA APLICAÇÃO WEB //
    public function agrotoxicosindex()
    {
        $agro = Agrotoxicos::all();
        return view('agrotoxicos', compact('agro'));
    }

    public function create()
    {
        return view('agrotoxicocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agrotoxicostore(Request $request)
    {
        $agro = new Agrotoxicos();
        $agro->cultura        = $request->input('cultura');
        $agro->canteiro       = $request->input('canteiro');
        $agro->date           = $request->input('date');
        $agro->produto        = $request->input('produto');
        $agro->aplicacao      = $request->input('aplicacao');
        $agro->dosagem        = $request->input('dosagem');
        $agro->volume         = $request->input('volume');
        $agro->indicacao      = $request->input('indicacao');
        $agro->carencia       = $request->input('carencia');
        $agro->save();
        return redirect('/agrotoxicos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agro = Agrotoxicos::find($id);
        if (isset($agro)) {
            return view('agrotoxicoedit', compact('agro'));
        }
        return redirect('/agrotoxicos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function agrotoxicoupdate(Request $request, $id)
    {
        $agro = Agrotoxicos::find($id);
        if (isset($agro)) {
            $agro->cultura        = $request->input('cultura');
            $agro->canteiro       = $request->input('canteiro');
            $agro->date           = $request->input('date');
            $agro->produto        = $request->input('produto');
            $agro->aplicacao      = $request->input('aplicacao');
            $agro->dosagem        = $request->input('dosagem');
            $agro->volume         = $request->input('volume');
            $agro->indicacao      = $request->input('indicacao');
            $agro->carencia       = $request->input('carencia');
            $agro->save();
        }
        return redirect('/agrotoxicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agro = Agrotoxicos::find($id);
        if (isset($agro)) {
            $agro->delete();
        }

        return redirect('/agrotoxicos');
    }
}
