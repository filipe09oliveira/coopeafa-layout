@extends('layout.app')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Culturas</h1>
    </div>

    <hr class="sidebar-divider">

    <form action="/cultura/{{$cultura->id}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$cultura->nome}}" placeholder="Nome Cultura">
        </div>
        <div class="form-group">
            <label for="hectaries">Hectaries</label>
            <input type="text" class="form-control" name="hectaries" id="hectaries" value="{{$cultura->hectaries}}" placeholder="Hectaries">
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="text" class="form-control" name="date" id="date" value="{{$cultura->date}}" placeholder="Data">
        </div>
        <div class="form-group">
            <label for="propriedade">Propriedade</label>
            <input type="text" class="form-control" name="propriedade" id="propriedade" value="{{$cultura->propriedade}}" placeholder="Propriedade">
        </div>
        <div class="form-group">
            <label for="colheita">Colheita</label>
            <input type="text" class="form-control" name="colheita" id="colheita" value="{{$cultura->colheita}}" placeholder="Colheita">
        </div>


        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>
@endsection
