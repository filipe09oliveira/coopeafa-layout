@extends('layout.app')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tipo das Propriedades </h1>

        <a href="/transportadora/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Transportadoras </a>
    </div>

    <hr class="sidebar-divider">

    <!-- Content Row -->
    <div class="table-responsive">
        @if(count($transportadora) > 0)
            <table id="datatable" class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead>
                <tr>
                    <th style="width: 50px;">ID</th>
                    <th>Razão Social</th>
                    <th class="text-center" style="width: auto">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($transportadora as $transportadoras )
                    <tr>
                        <td>{{$transportadoras->id}}</td>
                        <td>{{$transportadoras->razao_social}}</td>
                        <td class="text-center" style="width: 200px;">
                            <a href="/transportadora/edit/{{$transportadoras->id}}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                            <a href="/transportadora/delete/{{$transportadoras->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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
