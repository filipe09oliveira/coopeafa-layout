@extends('layout.app')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Proprietario</h1>
    </div>

    <hr class="sidebar-divider">

    <form class="needs-validation" action="/proprietario/{{$propri->id}}" method="POST" novalidate>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome da Proprietario</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$propri->name}}"
                       placeholder="Proprietario" required>
                <div class="invalid-feedback">
                    Por favor, escolha um nome.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="surname">Sobrenome</label>
                <input type="text" class="form-control" name="surname" id="surname" value="{{$propri->surname}}"
                       placeholder="Sobrenome" required>
                <div class="invalid-feedback">
                    Por favor, escolha um sobrenome.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" value="{{$propri->cpf}}" placeholder="CPF"
                       required>
                <div class="invalid-feedback">
                    CPF invalido ou não inserido.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="registro">Registro</label>
                <input type="text" class="form-control" name="registro" id="registro" value="{{$propri->registro}}"
                       placeholder="Registro" required>
                <div class="invalid-feedback">
                    Por favor, escolha um registro.
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="numeroDAP">Numero do DAP</label>
                <input type="text" class="form-control" name="numeroDAP" id="numeroDAP" value="{{$propri->numeroDAP}}"
                       placeholder="DAP" required>
                <div class="invalid-feedback">
                    Por favor, escolha um numero do DAP.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="validadeDAP">Validade DAP</label>
                <input type="text" class="form-control" name="validadeDAP" id="validadeDAP"
                       value="{{$propri->validadeDAP}}"
                       placeholder="Validade DAP" required>
                <div class="invalid-feedback">
                    Por favor, escolha a validade do DAP.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="date">Data</label>
                <input type="text" class="form-control" name="date" id="date" value="{{$propri->date}}"
                       placeholder="Data" required>
                <div class="invalid-feedback">
                    Por favor, escolha uma data.
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar</button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>
@endsection
