@extends('layout.app')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Colheitas </h1>

        <a href="/colheita/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Colheitas </a>
    </div>

    <hr class="sidebar-divider">

    <!-- Content Row -->
    <div class="table-responsive">
        @if(count($colhei) > 0)
            <table id="datatable" class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>unidade</th>
                    <th>Peso</th>
                    <th>Quantidade</th>
                    <th>Perda</th>
                    <th>Transportador</th>
                    <th>Comprador</th>
                    <th class="text-center" style="width: auto">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($colhei as $colheis )
                    <tr>
                        <td>{{$colheis->id}}</td>
                        <td>{{$colheis->produto}}</td>
                        <td>{{$colheis->unidade}}</td>
                        <td>{{$colheis->peso}}</td>
                        <td>{{$colheis->quantidade}}</td>
                        <td>{{$colheis->perda}}</td>
                        <td>{{$colheis->transportador}}</td>
                        <td>{{$colheis->comprador}}</td>
                        <td class="text-center">
                            <a href="/colheita/edit/{{$colheis->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/colheita/delete/{{$colheis->id}}" class="btn btn-sm btn-danger">Excluir</a>
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
