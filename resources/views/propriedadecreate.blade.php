@extends('layout.app')

@section('body')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastro de Proprietarios</h1>
    </div>

    <hr class="sidebar-divider">

    <form class="needs-validation" action="/propriedades" method="POST" novalidate>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="cafir">Nome da Porpriedade</label>
                <input type="text" class="form-control form-control-sm" name="cafir" id="cafir"
                       placeholder="Nome da Porpriedade" required>
                <div class="invalid-feedback">
                    Por favor, escolha um nome para propriedade.
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="tamanho">Tamanho</label>
                <input type="number" class="form-control form-control-sm" name="tamanho" id="tamanho"
                       placeholder="Tamanho" required>
                <div class="invalid-feedback">
                    Por favor, escolha um nome para propriedade.
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control form-control-sm" name="tipo" id="tipo" placeholder="Tipo" required>
                <div class="invalid-feedback">
                    Por favor, escolha um tipo.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control form-control-sm" name="cep" id="cep" placeholder="Cep" required>
                <div class="invalid-feedback">
                    Por favor, escolha um CEP.
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="rua">Rua</label>
                <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder="Rua" required>
                <div class="invalid-feedback">
                    Por favor, escolha uma rua.
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="numero">Numero</label>
                <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder="Numero" required>
                <div class="invalid-feedback">
                    Por favor, escolha um numero.
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="Cidade" required>
                <div class="invalid-feedback">
                    Por favor, escolha uma cidade.
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="Bairro" required>
                <div class="invalid-feedback">
                    Por favor, escolha um bairro.
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                       placeholder="Complemento" required>
                <div class="invalid-feedback">
                    Por favor, escolha um complemento.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="contrato">Contrato</label>
                <input type="text" class="form-control form-control-sm" name="contrato" id="contrato"
                       placeholder="contrato" required>
                <div class="invalid-feedback">
                    Por favor, escolha um contrato.
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary btn-sm"> Cadastrar</button>
        <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
    </form>

@endsection
