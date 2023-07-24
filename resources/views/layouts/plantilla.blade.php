<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Ave Fenix')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('css')
    
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
    {{--   <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> --}}


     
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
 
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="text-decoration: none">
      <img src="/logo_avefenix.png"class=" " alt="Logo Ave Fenix" style="width: 50px; margin:auto 10px; opacity: .8"> 
      <span class="brand-text font-weight-light" >Ave Fenix</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      {{-- PARA NOMBRE DE USUARIO E IMAGEN --}}

      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nombre Uuario</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      <div class="form-inline" style="margin-top: 10%">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
  
              <img src="usuario.png" alt="" style="margin: 0px 5px 0px 3px">
              <p>
                Acceso
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              @can('role.index') 
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                
                  <p>Roles</p>
                </a>
              </li>
              @endcan

              @can('user.index') 
              <li class="nav-item">
                <a href="{{route('usuarios.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              @endcan
           {{--    <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> --}}
            </ul>
          </li>

        {{-- INICIO SUBSISTEMA MANTENIMIENTO --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
     
            <img src="mantenimiento.png" alt="" style="margin: 0px 5px 0px 3px">
            <p>
              Mantenimiento
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('Herramienta.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Herramientas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('Proveedor.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Proveedores</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('Taller.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Taller</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('Recurso.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Recursos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('Prioridad.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Prioridades</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('Bus.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Buses</p>
              </a>
            </li>
          </ul>
        </li>


        {{-- FIN SUBSISTEMA MANTENIMIENTO --}}

        

        {{-- INICIO SUBSISTEMA CONTABILIDAD --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Contabilidad
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contabilidad v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contabilidad v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contabilidad v3</p>
                </a>
              </li>
            </ul>
          </li>
        {{-- FIN SUBSISTEMA CONTABILIDAD --}}



          
        {{-- INICIO SUBSISTEMA RECURSOS HUMANOS --}}

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Recursos Humanos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('Personal.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Personal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Otro</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Otro</p>
              </a>
            </li>
          </ul>
        </li>

        {{-- FIN SUBSISTEMA RECURSOS HUMANOS --}}




        {{-- INICIO SUBSISTEMA ENCOMIENDA --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Encomiendas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/agencias" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Agencias</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/comprobantes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Comprobantes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/envios" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Envios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/paquetes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Paquetes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/promociones" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Promociones</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/reclamos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reclamos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/rutas" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rutas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/tarifas" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tarifas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/transportes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Transportes</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- FIN SUBSISTEMA ENCOMIENDA --}}





        {{-- INICIO SUBSISTEMA VENTAS --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-signal"></i>
            <p>
              Ventas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('cliente.index')}}" class="nav-link fas fa-user">
                <i class="nav-icon"></i>
                <p>Clientes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('ventas.index')}}" class="nav-link fas fa-credit-card">
                <i class="nav-icon"></i>
                <p>ListaVentas</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- FIN SUBSISTEMA VENTAS --}}
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
    <section class="content">

        @yield('content')
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2023 Grupo 1 - Ingeniería de Software.</strong> Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>
  @yield('script')
</script>
</body>
</html>
