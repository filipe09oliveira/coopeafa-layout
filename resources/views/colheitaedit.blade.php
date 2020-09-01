@extends('layout.app')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Colheitas</h1>
    </div>

    <hr class="sidebar-divider">

    <form action="/colheita/{{$colhe->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produto">Produtos</label>
            <input type="text" class="form-control" name="produto" id="produto" value="{{$colhe->produto}}" placeholder="Produtos">
        </div>
        <div class="form-group">
            <label for="unidade">Unidade</label>
            <input type="text" class="form-control" name="unidade" id="unidade" value="{{$colhe->unidade}}"  placeholder="Unidade">
        </div>
        <div class="form-group">
            <label for="peso">Peso</label>
            <input type="text" class="form-control" name="peso" id="peso" value="{{$colhe->peso}}" placeholder="Peso">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="quantidade" value="{{$colhe->quantidade}}" placeholder="Quantidade">
        </div>
        <div class="form-group">
            <label for="perda">Perda</label>
            <input type="text" class="form-control" name="perda" id="perda" value="{{$colhe->perda}}" placeholder="Perda">
        </div>
        <div class="form-group">
            <label for="transportador">Transportador</label>
            <input type="text" class="form-control" name="transportador" id="transportador" value="{{$colhe->transportador}}" placeholder="Transportador">
        </div>
        <div class="form-group">
            <label for="comprador">Comprador</label>
            <input type="text" class="form-control" name="comprador" id="comprador" value="{{$colhe->comprador}}" placeholder="Comprador">
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="text" class="form-control" name="date" id="date" value="{{$colhe->date}}" placeholder="Data">
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>
@endsection
