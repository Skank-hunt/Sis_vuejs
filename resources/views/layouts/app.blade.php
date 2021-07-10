<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/menus.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    @if(auth()->user())
        <div class='dashboard'>
            <div class="dashboard-nav">
                <header>
                    <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"><i
                        class="fas fa-anchor"></i> <span>Emihermx</span></a>
                </header>
                <nav class="dashboard-nav-list">
                    <a href="/home" class="dashboard-nav-item active"><i class="fas fa-home"></i>Inicio</a>
                    <div class='dashboard-nav-dropdown'>
                        <a class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fas fa-users"></i> Municipios 
                        </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="/admin/municipios" class="dashboard-nav-dropdown-item">Usuarios</a>
                        </div>
                    </div>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i> dashboard</a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Upload </a>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fas fa-photo-video"></i> Media 
                        </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="#" class="dashboard-nav-dropdown-item">All</a>
                            <a href="#" class="dashboard-nav-dropdown-item">Recent</a>
                            <a href="#" class="dashboard-nav-dropdown-item">Images</a>
                            <a href="#" class="dashboard-nav-dropdown-item">Video</a>
                        </div>
                    </div>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fas fa-money-check-alt"></i> Payments 
                        </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="#" class="dashboard-nav-dropdown-item">All</a>
                            <a href="#" class="dashboard-nav-dropdown-item">Recent</a>
                            <a href="#" class="dashboard-nav-dropdown-item"> Projections</a>
                        </div>
                    </div>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
                    <div class="nav-item-divider"></div>
                    <a href="{{ route('logout') }}" class="dashboard-nav-item"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    </a>
                </nav>
            </div>
            <div class='dashboard-app'>
                <header class='dashboard-toolbar'>
                    <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                    <a style="color:white;">Censo de Alumbrado Público Zona Toluca 2021</a>
                </header>
                <div class='dashboard-content'>
                    <div class='container'>
                         @yield('content')
                    </div>
                </div>
            </div>
        </div>
    @endif
    <main>
        @yield('content_login')
    </main>
</body>

</html>

<script type="text/javascript">
    const mobileScreen = window.matchMedia("(max-width: 990px )");
    $(document).ready(function () {
        $(".dashboard-nav-dropdown-toggle").click(function () {
            $(this).closest(".dashboard-nav-dropdown")
                .toggleClass("show")
                .find(".dashboard-nav-dropdown")
                .removeClass("show");
            $(this).parent()
                .siblings()
                .removeClass("show");
        });
        $(".menu-toggle").click(function () {
            if (mobileScreen.matches) {
                $(".dashboard-nav").toggleClass("mobile-show");
            } else {
                $(".dashboard").toggleClass("dashboard-compact");
            }
        });
    });
</script>