@extends('layout.app')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agrotoxicos </h1>

        <a href="/agrotoxico/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Agrotoxicos </a>
    </div>

    <hr class="sidebar-divider">

    <!-- Content Row -->
    <div class="table-responsive">
        @if(count($agro) > 0)
            <table id="datatable" class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cultura</th>
                    <th>Canteiro</th>
                    <th>Produto</th>
                    <th>Aplicação</th>
                    <th>Dosagem</th>
                    <th>Aplicação</th>
                    <th>Volume</th>
                    <th class="text-center" style="width: auto">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($agro as $agros )
                    <tr>
                        <td>{{$agros->id}}</td>
                        <td>{{$agros->cultura}}</td>
                        <td>{{$agros->canteiro}}</td>
                        <td>{{$agros->produto}}</td>
                        <td>{{$agros->aplicacao}}</td>
                        <td>{{$agros->dosagem}}</td>
                        <td>{{$agros->aplicacao}}</td>
                        <td>{{$agros->volume}}</td>
                        <td class="text-center">
                            <a href="/agrotoxico/edit/{{$agros->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/agrotoxico/delete/{{$agros->id}}" class="btn btn-sm btn-danger">Excluir</a>
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
