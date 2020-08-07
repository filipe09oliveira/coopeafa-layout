@extends('layout.app')

@section('body')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastro de Proprietarios</h1>
    </div>

    <hr class="sidebar-divider">

    <form action="/propriedades" method="POST">
        @csrf
        <div class="form-group">
            <label for="cafir">Nome da Porpriedade</label>
            <input type="text" class="form-control" name="cafir" id="cafir" placeholder="Nome da Porpriedade">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
        </div>
        <div class="form-group">
            <label for="tamanho">Tamanho</label>
            <input type="text" class="form-control" name="tamanho" id="tamanho" placeholder="Tamanho">
        </div>
        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
        </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" placeholder="Cep">
        </div>
        <div class="form-group">
            <label for="numero">Numero</label>
            <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero">
        </div>
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
        </div>
        <div class="form-group">
            <label for="contrato">Contrato</label>
            <input type="text" class="form-control" name="contrato" id="contrato" placeholder="contrato">
        </div>


        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>

@endsection
