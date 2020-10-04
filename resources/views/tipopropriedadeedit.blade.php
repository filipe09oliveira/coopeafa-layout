@extends('layout.app')

@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Tipo das Propriedades</h1>
</div>

<hr class="sidebar-divider">

<form class="needs-validation" action="/tipoPropriedade/{{$tipoPropriedade->id}}" method="POST" novalidate>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-7">
            <label for="descricao">Tipo</label>
            <input type="text" class="form-control form-control-sm" name="descricao" id="descricao" value="{{$tipoPropriedade->descricao}}" placeholder="descricao" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"> Cadastrar</button>
    <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
</form>
@endsection