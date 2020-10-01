@extends('layout.app')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Propriedades</h1>

        <a href="/propriedade/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Propriedades </a>
    </div>

    <hr class="sidebar-divider">

    <!-- Content Row -->
    <div class="table-responsive">
        @if(count($proprie) > 0)
            <table id="datatable" class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Propriedade</th>
                    <th>Tipo</th>
                    <th>Tamanho</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>Numero</th>
                    <th>Contrato</th>
                    <th class="text-center" style="width: auto">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proprie as $propries )
                    <tr>
                        <td>{{$propries->id}}</td>
                        <td>{{$propries->cafir}}</td>
                        <td>{{$propries->tipo->descricao}}</td>
                        <td>{{$propries->tamanho}}</td>
                        <td>{{$propries->rua}}</td>
                        <td>{{$propries->bairro}}</td>
                        <td>{{$propries->numero}}</td>
                        <td>{{$propries->contrato}}</td>
                        <td class="text-center">
                            <a href="/propriedade/edit/{{$propries->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/propriedade/delete/{{$propries->id}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-danger" role="alert">
                Nenhum dado encontrato!
            </div>
        @endif
    </div>

    <!-- Content Row -->
@endsection
