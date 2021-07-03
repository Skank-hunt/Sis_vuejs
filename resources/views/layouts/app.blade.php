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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menus.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" style="color: white;">Censo de Alumbrado Público</a>
            </div>
        </nav>
        @guest
            @else
                <div class="page-wrapper chiller-theme toggled">
                    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#"><i class="fas fa-bars"></i></a>
                        <nav id="sidebar" class="sidebar-wrapper">
                            <div class="sidebar-content">
                                <div class="sidebar-brand">
                                    <a>Toluca 2021</a>
                                    <div id="close-sidebar">
                                        <i class="fas fa-window-close"></i>
                                    </div>
                                </div>
                                <div class="sidebar-header">
                                    <div class="user-pic">
                                        <img class="img-responsive img-rounded" src="/img/Captura.png">
                                    </div>
                                    <div class="user-info">
                                        <span class="user-name">Emihermx</span>
                                        <span class="user-role">Administrador</span>
                                    </div>
                                </div>
                                <div class="sidebar-menu">
                                    <ul>
                                        <li class="sidebar-dropdown">
                                            <a href="#">
                                              <i class="fas fa-user"></i>
                                              <span>Municipios y Usuarios</span>
                                            </a>
                                            <div class="sidebar-submenu">
                                                <ul>
                                                    <li><a href="/admin/municipios">Agregar Municipios</a></li>
                                                    <li><a href="/admin/usuarios">Agregar Usuarios</a></li>
                                                    <li><a href="#">Municipios-Colonias-Calles</a></li>
                                                  </ul>
                                            </div>
                                        </li>
                                          <li class="sidebar-dropdown">
                                            <a href="#"><i class="fas fa-calendar-check"></i><span>Coinciliación</span></a>
                                            <div class="sidebar-submenu">
                                              <ul>
                                                <li><a href="#">Programa Semanal</a></li>
                                                <li><a href="#">Avance Alcanzado</a></li>
                                                <li><a href="#">Información Luminarias</a></li>
                                                <li><a href="#">Aprobar Luminarias</a></li>
                                              </ul>
                                            </div>
                                          </li>
                                          <li class="sidebar-dropdown"><a href="#"><i class="fas fa-folder-open">
                                                </i><span>Documentos</span>
                                            </a>
                                            <div class="sidebar-submenu">
                                              <ul>
                                                <li><a href="#">Informes</a></li>
                                                <li><a href="#">Fichas Técnicas</a></li>
                                                <li><a href="/admin/security">Seguridad</a></li>
                                              </ul>
                                            </div>
                                          </li>
                                          <li class="sidebar-dropdown">
                                            <a href="#"><i class="fas fa-chart-line"></i><span>Anexo 2</span></a>
                                            <div class="sidebar-submenu">
                                              <ul>
                                                <li><a href="#">Comparativa Censo </a></li>
                                                <li><a href="#">Carga por Luminarias</a></li>
                                                <li><a href="#">Carga por Colonia</a></li>
                                                <li><a href="#">Carga por Calle</a></li>
                                                <li><a href="#">Carga Luminaras (24 hrs)</a></li>
                                                <li><a href="#">Carga Tipo Luminarias</a></li>
                                                <li><a href="#">Carga de Semáforos</a></li>
                                              </ul>
                                            </div>
                                          </li>
                                          <li class="sidebar-dropdown">
                                            <a href="#"><i class="fa fa-globe"></i><span>Mapas</span></a>
                                            <div class="sidebar-submenu">
                                              <ul>
                                                <li><a href="#">Google maps</a></li>
                                                <li><a href="#">Delimitación de la zona</a></li>
                                              </ul>
                                            </div>
                                          </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-footer">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                   document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                        </form>
                                    </a>
                                </div>
                        </nav>
                        <main class="page-content">
                              @yield('content')
                        </main>
                </div>
        @endguest
        <main class="py-4">
            @yield('content1')
        </main>
    </div>
</body>
<footer class="page-footer font-small teal pt-4">
  <div class="container-fluid text-center text-md-left" style="background-color: rgba(0, 0, 0, 0.1);">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <p>Emiliano Zapata 101 Col. La Constitución Totoltepec Toluca, Edo. Mex.</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
        <p>Tel. +01 7225700633</p>
        <p>contacto@emiher.com</p>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3" style="background-color: rgba(0, 0, 0, 0.2);">
    EMIHER CONSTRUCCIONES E INSTALACIONES © 2021
  </div>
</footer>

</html>

<script type="text/javascript">
    jQuery(function ($) {
        $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
              .parent()
              .hasClass("active")
             ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                  .parent()
                  .removeClass("active");
        } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                  .next(".sidebar-submenu")
                  .slideDown(200);
                $(this)
                  .parent()
                  .addClass("active");
              }
        });
        $("#close-sidebar").click(function() {
          $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
          $(".page-wrapper").addClass("toggled");
        }); 
    });
</script>