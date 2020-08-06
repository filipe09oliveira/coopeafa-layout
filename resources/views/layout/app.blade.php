<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" >

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>COOPEAFA</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-for-all.css') }}" rel="stylesheet">

    <link href="{{ asset('js/datatables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>
<body>
<div id="wrapper">
@component('navbar')
@endcomponent
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            @component('siderbar')
            @endcomponent
            <div class="container-fluid">
                <div class="jumbotron border border-light" style="background-color: white">
                    <main role="main">
                        @hasSection('body')
                            @yield('body')
                        @endif
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="{{ asset('js/datatables/datatables.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/datatable.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/script-for-all.js') }}" type="text/javascript"></script>

</body>
</html>
