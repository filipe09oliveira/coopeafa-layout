@extends('layout.app')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Colheitas</h1>
    </div>

    <hr class="sidebar-divider">

    <form action="/proprietario/{{$colhei->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produto">Produtos</label>
            <input type="text" class="form-control" name="produto" id="produto" value="{{$colhei->produto}}" placeholder="Produtos">
        </div>
        <div class="form-group">
            <label for="unidade">Unidade</label>
            <input type="text" class="form-control" name="unidade" id="unidade" value="{{$colhei->unidade}}"  placeholder="Unidade">
        </div>
        <div class="form-group">
            <label for="peso">Peso</label>
            <input type="text" class="form-control" name="peso" id="peso" value="{{$colhei->peso}}" placeholder="Peso">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="quantidade" value="{{$colhei->quantidade}}" placeholder="Quantidade">
        </div>
        <div class="form-group">
            <label for="perda">Perda</label>
            <input type="text" class="form-control" name="perda" id="perda" value="{{$colhei->perda}}" placeholder="Perda">
        </div>
        <div class="form-group">
            <label for="transportador">Transportador</label>
            <input type="text" class="form-control" name="transportador" id="transportador" value="{{$colhei->transportador}}" placeholder="Transportador">
        </div>
        <div class="form-group">
            <label for="comprador">Comprador</label>
            <input type="text" class="form-control" name="comprador" id="comprador" value="{{$colhei->comprador}}" placeholder="Comprador">
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="password" class="form-control" name="date" id="date" value="{{$colhei->date}}" placeholder="Data">
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>
@endsection
