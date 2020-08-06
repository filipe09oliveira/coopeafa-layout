@extends('layout.app')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Culturas </h1>

        <a href="/cultura/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Cultura </a>
    </div>

    <hr class="sidebar-divider">

    <!-- Content Row -->
    <div class="table-responsive">
        @if(count($cultura) > 0)
            <table id="datatable" class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Hectaries</th>
                    <th>Propriedade</th>
                    <th>Colheita</th>
                    <th class="text-center w-25 p-3">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cultura as $culturas )
                    <tr>
                        <td>{{$culturas->id}}</td>
                        <td>{{$culturas->nome}}</td>
                        <td>{{$culturas->hectaries}}</td>
                        <td>{{$culturas->propriedade}}</td>
                        <td>{{$culturas->colheita}}</td>
                        <td class="text-center">
                            <a href="/cultura/edit/{{$culturas->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/cultura/delete/{{$culturas->id}}" class="btn btn-sm btn-danger">Excluir</a>
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
