@extends('layout.app')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Culturas</h1>
    </div>

    <hr class="sidebar-divider">

    <form action="/cultura/{{$cultura->id}}" method="POST">
        @csrf
        <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$cultura->nome}}" placeholder="Nome Cultura" required>
            <div class="invalid-feedback">
                Por favor, escolha o nome da cultura.
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="hectaries">Hectaries</label>
            <input type="text" class="form-control" name="hectaries" id="hectaries" value="{{$cultura->hectaries}}" placeholder="Hectaries" required>
            <div class="invalid-feedback">
                Por favor, escolha o tamanho da cultura.
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="propriedade">Propriedade</label>
            <select class="custom-select custom-select-sm mb-3" name="propriedade_id" id="propriedade_id">
                <option value="" selected></option>
                @foreach($propriedade as $propriedades)
                <option value="{{$propriedades->id}}" {{$cultura->propriedade_id == $propriedades->id ? 'selected' : ''}}>{{$propriedades->cafir}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="colheita_id">Colheita</label>
            <select class="custom-select custom-select-sm mb-3" name="colheita_id" id="colheita_id">
                <option value="" selected></option>
                @foreach($colheita as $colheitas)
                <option value="{{$colheitas->id}}" {{$cultura->colheita_id == $colheitas->id ? 'selected' : ''}}>{{$colheitas->id}}</option>
                @endforeach
            </select>
        </div>
    </div>
  

        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>
@endsection
