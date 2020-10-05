@extends('layout.app')

@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Transportadora</h1>
</div>

<hr class="sidebar-divider">

<form class="needs-validation" action="/transportadora/{{$transportadora->id}}" method="POST" novalidate>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-7">
            <label for="razao_social">Razão Social</label>
            <input type="text" class="form-control form-control-sm" name="razao_social" id="razao_social" value="{{$transportadora->razao_social}}" placeholder="Razão Social" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"> Cadastrar</button>
    <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
</form>
@endsection