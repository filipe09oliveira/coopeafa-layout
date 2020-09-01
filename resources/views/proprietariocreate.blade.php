@extends('layout.app')

@section('body')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastro de Proprietarios</h1>
    </div>

    <hr class="sidebar-divider">

    <form class="needs-validation" action="/proprietarios" method="POST" novalidate>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control form-control-sm" name="name" id="name" placeholder="Nome"
                       required>
                <div class="invalid-feedback">
                    Por favor, escolha um nome.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="surname">Sobrenome</label>
                <input type="text" class="form-control form-control-sm" name="surname" id="surname"
                       placeholder="Sobrenome" required>
                <div class="invalid-feedback">
                    Por favor, escolha um sobrenome.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control form-control-sm" name="cpf" id="cpf" placeholder="CPF" required>
                <div class="invalid-feedback">
                    CPF invalido ou não inserido.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="registro">Registro</label>
                <input type="text" class="form-control form-control-sm" name="registro" id="registro"
                       placeholder="Registro" required>
                <div class="invalid-feedback">
                    Por favor, escolha um registro.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="numeroDAP">Numero do DAP</label>
                <input type="text" class="form-control form-control-sm" name="numeroDAP" id="numeroDAP"
                       placeholder="DAP" required>
                <div class="invalid-feedback">
                    Por favor, escolha um numero do DAP.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="validadeDAP">Validade DAP</label>
                <input type="text" class="form-control form-control-sm" name="validadeDAP" id="validadeDAP"
                       placeholder="Validade DAP" required>
                <div class="invalid-feedback">
                    Por favor, escolha a validade do DAP.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="date">Data</label>
                <input type="text" class="form-control form-control-sm" name="date" id="date" placeholder="Data"
                       required>
                <div class="invalid-feedback">
                    Por favor, escolha uma data.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="password">Senha</label>
                <input type="password" class="form-control form-control-sm" name="password" id="password"
                       placeholder="Senha" required>
                <small id="passwordHelpInline" class="text-muted">
                    Deve ter entre 8 e 20 caracteres.
                </small>
                <div class="invalid-feedback">
                    Senha invalida ou não inserida.
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar</button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>

@endsection
