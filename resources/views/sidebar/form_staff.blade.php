<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <!-- <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div> -->
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name=='Admin')
                            <span>Nome: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Função:</span>
                            <span class="badge bg-success">Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Super Admin')
                            <span>Nome: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Função:</span>
                            <span class="badge bg-info">Super Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
                            <span>Nome: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Função:</span>
                            <span class="badge bg-warning">User Normal</span>
                            @endif
                        </div>
                    </div>
                </li>
                @if (Auth::user()->role_name=='Admin' || Auth::user()->role_name=='Super Admin')
                <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Cliente</span>
                    </a>
                    <ul class="submenu">
                    <li class="submenu-item">
                            <a href="{{ route('client/add/new') }}">Cadastro de Clientes</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('clientManagement') }}">Controle de Clientes</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log') }}">Registro de atividades do cliente</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Relatório</span>
                    </a>
                    <ul class="submenu">
                    <li class="submenu-item">
                            <a href="{{ route('donwloadindex') }}">Donwloads</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('examesindex') }}">Exames por plano</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Usuário</span>
                    </a>
                    <ul class="submenu">
                    <li class="submenu-item">
                            <a href="{{ route('user_register') }}">Cadastro de Usuário</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user_management') }}">Controle de Usuário</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log') }}">Registro de atividades do usuário</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/login/logout') }}">Registro de atividade</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Ferramentas</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('user_management') }}">KanBan</a>
                        </li>
                    </ul>
                </li>
                @endif
<!--
                <li class="sidebar-title">Formulários &amp; Tabelas</li>
                <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Formularios</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item active">
                            <a href="{{ route('form/staff/new') }}">Staff Input</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>View Record</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/view/detail') }}">View Detail</a>
                        </li>
                    </ul>
                </li>
-->
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
