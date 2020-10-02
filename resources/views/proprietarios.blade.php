@extends('layout.app')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Proprietários</h1>

        <a href="/proprietario/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Proprietários </a>
    </div>

    <hr class="sidebar-divider">

    <!-- Content Row -->
    <div class="table-responsive">
        @if(count($propri) > 0)
            <table id="datatable" class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Numero DAP</th>
                    <th>Validade DAP</th>
                    <th>Resgistro</th>
                    <th class="text-center" style="width: auto">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($propri as $propris )
                    <tr>
                        <td>{{$propris->id}}</td>
                        <td>{{$propris->name}}</td>
                        <td>{{$propris->cpf}}</td>
                        <td>{{$propris->numeroDAP}}</td>
                        <td>{{$propris->validadeDAP}}</td>
                        <td>{{$propris->registro}}</td>
                        <td class="text-center">
                            <a href="/proprietario/edit/{{$propris->id}}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                            <a href="/proprietario/delete/{{$propris->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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
