@extends('layout.app')

@section('body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cadastro de Culturas</h1>
</div>

<hr class="sidebar-divider">

<form class="needs-validation" action="/culturas" method="POST" novalidate>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Nome Cultura"
                required>
            <div class="invalid-feedback">
                Por favor, escolha o nome da cultura.
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="hectaries">Hectaries</label>
            <input type="text" class="form-control form-control-sm" name="hectaries" id="hectaries"
                placeholder="Hectaries" required>
            <div class="invalid-feedback">
                Por favor, escolha o tamanho da cultura.
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="propriedade_id">Propriedade</label>
            <select class="custom-select custom-select-sm mb-3" name="propriedade_id" id="propriedade_id" required>
                <option value="" selected></option>
                @foreach($propriedade as $propriedades)
                <option value="{{$propriedades->id}}">{{$propriedades->cafir}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Por favor, Selecione uma propriedade.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="colheita_id">Colheita</label>
            <select class="custom-select custom-select-sm mb-3" name="colheita_id" id="colheita_id" required>
                <option value="" selected></option>
                @foreach($colheita as $colheitas)
                <option value="{{$colheitas->id}}">{{$colheitas->id}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Por favor, Selecione uma colheita.
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
    <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
</form>

@endsection