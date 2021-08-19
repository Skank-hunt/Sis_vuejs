<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    {{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
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
                        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fas fa-users"></i> Municipios y Usuarios
                        </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="{{url('/admin/municipios')}}" class="dashboard-nav-dropdown-item">Municipios</a>
                            <a href="{{url('/admin/usuarios')}}" class="dashboard-nav-dropdown-item">Usuarios</a>
                        </div>
                    </div>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fas fa-highlighter"></i> Registros
                        </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="{{ url('/admin/luminaria') }}" class="dashboard-nav-dropdown-item"><i class="fas fa-lightbulb"></i>&nbsp; Luminarias</a>
                            <a href="#!" class="dashboard-nav-dropdown-item"><i class="fas fa-paint-roller"></i>&nbsp; Publicitarios</a>

                        </div>
                    </div>
{{--                    <a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Upload </a>--}}
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fas fa-folder"></i> Documentos
                        </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="#" class="dashboard-nav-dropdown-item"><h6><i class="fas fa-file-alt"></i>&nbsp; Informes</h6></a>
                            <a href="#" class="dashboard-nav-dropdown-item"><i class="fas fa-file-alt"></i>&nbsp; Ficha Tecnica</a>
                            <a href="{{ url('/admin/security') }}" class="dashboard-nav-dropdown-item"><i class="fas fa-file-alt"></i> &nbsp; Seguridad</a>
                        </div>
                    </div>
                    <a href="{{url('/admin/mapa')}}" class="dashboard-nav-item"><i class="fas fa-map-marked-alt"></i> Mapa Luminarias </a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Perfil </a>
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