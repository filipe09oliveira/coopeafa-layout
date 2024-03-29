<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <img src="{{ asset('logo.png') }}" width="150" height="100" alt="" loading="lazy">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Propriétario -->
    <li class="nav-item {{ Request::is('proprietarios') || Request::is('proprietario/create') ? 'active' : '' }}">
        <a class="nav-link" href="/proprietarios"><i class="fas fa-fw fa-users"></i><span>Propriétarios</span></a>
    </li>

    <!-- Nav Item - Propriedade -->
    <li class="nav-item {{ Request::is('propriedades') ||  Request::is('propriedade/create') ? 'active' : '' }}">
        <a class="nav-link" href="/propriedades"><i class="fas fa-fw fa-house-user"></i><span>Propriedade</span></a>
    </li>

    <!-- Nav Item - Culturas -->
    <li class="nav-item {{ Request::is('culturas') ||  Request::is('cultura/create') ? 'active' : '' }}">
        <a class="nav-link" href="/culturas"><i class="fas fa-fw fa-seedling"></i><span>Culturas</span></a>
    </li>

    <!-- Nav Item - Agrotóxicos -->
    <li class="nav-item {{ Request::is('agrotoxicos') ||  Request::is('agrotoxico/create') ? 'active' : '' }}">
        <a class="nav-link" href="/agrotoxicos"><i class="fas fa-fw fa-biohazard"></i><span>Agrotóxicos</span></a>
    </li>

    <!-- Nav Item - Colheitas -->
    <li class="nav-item {{ Request::is('colheitas') ||  Request::is('colheita/create') ? 'active' : '' }}">
        <a class="nav-link" href="/colheitas"><i class="fas fa-fw fa-dolly"></i><span>Colheitas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Cadastros</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Cadastros Diversos:</h6>
                <a class="collapse-item" href="/produtos">Produtos</a>
                <a class="collapse-item" href="/transportadoras">Transportadora</a>
                <a class="collapse-item" href="/clientes">Clientes</a>
                <a class="collapse-item" href="/tipoPropriedades">Tipo Propriedade</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
