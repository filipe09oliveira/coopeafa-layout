@extends('layout.app')

@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Proprietario</h1>
</div>

<hr class="sidebar-divider">

<form class="needs-validation" action="/propriedade/{{$proprie->id}}" method="POST" novalidate>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-7">
            <label for="cafir">Nome da Porpriedade</label>
            <input type="text" class="form-control form-control-sm" name="cafir" id="cafir" value="{{$proprie->cafir}}" placeholder="CAFIR" required>
        </div>
        <div class="form-group col-md-2">
            <label for="tamanho">Tamanho</label>
            <input type="number" class="form-control form-control-sm" name="tamanho" id="tamanho" value="{{$proprie->tamanho}}" placeholder="Tamanho" required>
        </div>
        <div class="form-group col-md-3">
            <label for="tipo_propriedade">Tipo</label>
            <select class="custom-select custom-select-sm mb-3" name="tipo_propriedade" id="tipo_propriedade">
                <option value="" selected></option>
                @foreach($tipo as $tipos)
                <option value="{{$tipos->id}}" {{$proprie->tipo_propriedade == $tipos->id ? 'selected' : ''}}>{{$tipos->descricao}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="cep">CEP</label>
            <input type="text" class="form-control form-control-sm" name="cep" id="cep" value="{{$proprie->cep}}" placeholder="Cep" required>
        </div>
        <div class="form-group col-md-3">
            <label for="rua">Rua</label>
            <input type="text" class="form-control form-control-sm" name="rua" id="rua" value="{{$proprie->rua}}" placeholder="Rua" required>
        </div>
        <div class="form-group col-md-1">
            <label for="numero">Numero</label>
            <input type="text" class="form-control form-control-sm" name="numero" id="numero" value="{{$proprie->numero}}" placeholder="Numero" required>
        </div>
        <div class="form-group col-md-2">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" value="{{$proprie->cidade}}" placeholder="Cidade" required>
            <div class="invalid-feedback">
                Por favor, escolha uma cidade.
            </div>
        </div>
        <div class="form-group col-md-2">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" value="{{$proprie->bairro}}" placeholder="Bairro" required>
        </div>
        <div class="form-group col-md-2">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control form-control-sm" name="complemento" id="complemento" value="{{$proprie->complemento}}" placeholder="Complemento" required>
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="contrato">Contrato</label>
            <input type="text" class="form-control form-control-sm" name="contrato" id="contrato" value="{{$proprie->contrato}}" placeholder="contrato" required>
        </div>
    </div>


    <button type="submit" class="btn btn-primary btn-sm"> Cadastrar</button>
    <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
</form>
@endsection