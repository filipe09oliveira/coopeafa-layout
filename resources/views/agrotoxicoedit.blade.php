@extends('layout.app')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Culturas</h1>
    </div>

    <hr class="sidebar-divider">

    <form class="needs-validation" action="/agrotoxico/{{$agro->id}}" method="POST" novalidate>
        @csrf
        <div class="form-row">
        <div class="form-group col-md-5">
            <label for="cultura_id">Cultura</label>
            <select class="custom-select custom-select-sm mb-3" id="cultura_id" name="cultura_id" required>
                <option value="" selected></option>
                @foreach($cultura as $culturas)
                <option value="{{$culturas->id}}" {{$agro->cultura_id == $culturas->id ? 'selected' : ''}}>{{$culturas->nome}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Por favor, selecione uma cultura.
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="canteiro">Canteiro</label>
            <input type="text" class="form-control form-control-sm" name="canteiro" id="canteiro" value="{{$agro->canteiro}}" placeholder="Canteiros" required>
            <div class="invalid-feedback">
                Por favor, informe um canteiro.
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="produto">Produto</label>
            <input type="text" class="form-control form-control-sm" name="produto" id="produto" value="{{$agro->produto}}" placeholder="Produto" required>
            <div class="invalid-feedback">
                Por favor, informe um produto.
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="aplicacao">Aplicação</label>
            <input type="text" class="form-control form-control-sm" name="aplicacao" id="aplicacao" value="{{$agro->aplicacao}}" placeholder="Aplicação" required>
            <div class="invalid-feedback">
                Por favor, informe a aplicação.
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="dosagem">Dosagem</label>
            <input type="number" min="1" class="form-control form-control-sm" name="dosagem" id="dosagem" value="{{$agro->dosagem}}" placeholder="Dosagem" required>
            <div class="invalid-feedback">
                Por favor, informe a dosagem.
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="volume">Volume</label>
            <input type="number" min="1" class="form-control form-control-sm" name="volume" id="volume" value="{{$agro->dosagem}}" placeholder="Volume" required>
            <div class="invalid-feedback">
                Por favor, informe o volume.
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="indicacao">Indicação</label>
            <input type="text" class="form-control form-control-sm" name="indicacao" id="indicacao" value="{{$agro->indicacao}}" placeholder="Indicação" required>
            <div class="invalid-feedback">
                Por favor, informe a indicação.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="carencia">Carencia</label>
            <input type="text" class="form-control form-control-sm" name="carencia" id="carencia" value="{{$agro->carencia}}" placeholder="Carencia" required>
            <div class="invalid-feedback">
                Por favor, informe a carencia.
            </div>
        </div>
    </div>
        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar </button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>
@endsection
