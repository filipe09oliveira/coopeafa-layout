@extends('layout.app')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Proprietario</h1>
    </div>

    <hr class="sidebar-divider">

    <form action="/proprietario/{{$propri->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome da Proprietario</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$propri->name}}" placeholder="Proprietario">
        </div>
        <div class="form-group">
            <label for="surname">Sobrenome</label>
            <input type="text" class="form-control" name="surname" id="surname" value="{{$propri->surname}}" placeholder="Sobrenome">
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" value="{{$propri->cpf}}" placeholder="CPF">
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="text" class="form-control" name="date" id="date" value="{{$propri->date}}" placeholder="Data">
        </div>
        <div class="form-group">
            <label for="numeroDAP">Numero do DAP</label>
            <input type="text" class="form-control" name="numeroDAP" id="numeroDAP" value="{{$propri->numeroDAP}}" placeholder="DAP">
        </div>
        <div class="form-group">
            <label for="validadeDAP">Validade DAP</label>
            <input type="text" class="form-control" name="validadeDAP" id="validadeDAP" value="{{$propri->validadeDAP}}" placeholder="Validade DAP">
        </div>
        <div class="form-group">
            <label for="registro">Registro</label>
            <input type="text" class="form-control" name="registro" id="registro" value="{{$propri->registro}}" placeholder="Registro">
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>
@endsection
