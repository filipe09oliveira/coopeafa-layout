@extends('layout.app')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Culturas</h1>
    </div>

    <hr class="sidebar-divider">

    <form action="/agrotoxico/{{$agro->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cultura">Cultura</label>
            <input type="text" class="form-control" name="cultura" id="cultura" value="{{$agro->cultura}}" placeholder="Nome Cultura">
        </div>
        <div class="form-group">
            <label for="canteiro">Canteiros</label>
            <input type="text" class="form-control" name="canteiro" id="canteiro" value="{{$agro->canteiro}}"  placeholder="Canteiros">
        </div>
        <div class="form-group">
            <label for="produto">Produto</label>
            <input type="text" class="form-control" name="produto" id="produto" value="{{$agro->produto}}"  placeholder="Produto">
        </div>
        <div class="form-group">
            <label for="aplicacao">Aplicação</label>
            <input type="text" class="form-control" name="aplicacao" id="aplicacao" value="{{$agro->aplicacao}}"  placeholder="Aplicação">
        </div>
        <div class="form-group">
            <label for="dosagem">Dosagem</label>
            <input type="text" class="form-control" name="dosagem" id="dosagem" value="{{$agro->dosagem}}"  placeholder="Dosagem">
        </div>
        <div class="form-group">
            <label for="volume">Volume</label>
            <input type="text" class="form-control" name="volume" id="volume" value="{{$agro->volume}}"  placeholder="Volume">
        </div>
        <div class="form-group">
            <label for="indicacao">Indicação</label>
            <input type="text" class="form-control" name="indicacao" id="indicacao" value="{{$agro->indicacao}}"  placeholder="Indicação">
        </div>
        <div class="form-group">
            <label for="carencia">Carencia</label>
            <input type="text" class="form-control" name="carencia" id="carencia" value="{{$agro->carencia}}"  placeholder="Carencia">
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="text" class="form-control" name="date" id="date" value="{{$agro->date}}"  placeholder="Data">
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>
@endsection
