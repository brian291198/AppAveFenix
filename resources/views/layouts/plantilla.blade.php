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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

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
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
            </svg>
            <p>
              Recursos Humanos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
         <!-- Empleados   ------------------------------------------------------------------------------------->
            <li>
              <li class="nav-item">

                <a href="" class="nav-link">
                  <p>
                    Empleados
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 
                  <li class="nav-item">
                    <a href="{{route('Personal.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('Personal.create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Agregar</p>
                    </a>
                  </li>

                </ul>
              </li>
            </li>

          <!-- Fin Empleados   ------------------------------------------------------------------------------------->
          <!--Reclutamiento   ------------------------------------------------------------------------------------->
          <li>
            <li class="nav-item">

              <a href="#" class="nav-link">
                <p>                 
                  Reclutamiento
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
               
                <li class="nav-item">
                  <a href="{{route('Postulante.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('Postulante.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agregar</p>
                  </a>
                </li>

              </ul>
            </li>
          </li>
          <!-- Fin Reclutamiento   ------------------------------------------------------------------------------------->
          <!--Control   ------------------------------------------------------------------------------------->
          <li>
            <li class="nav-item">

              <a href="#" class="nav-link">
                <p>                 
                  Control
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
               
                <li class="nav-item">
                  <a href="{{route('permiso.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Permisos</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('vacaciones.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Vacaciones</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('contrato.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contrato</p>
                  </a>
                </li>

              </ul>
            </li>
          </li>
          <!--Fin Control   ------------------------------------------------------------------------------------->
          <!--configuración   ------------------------------------------------------------------------------------->
          <li>
            <li class="nav-item">

              <a href="#" class="nav-link">
                <p>                 
                  Configuración
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            {{--   {{route('sueldo.index')}} --}}
              <ul class="nav nav-treeview">
               
                <li class="nav-item">
                  <a href="{{route('area.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Areas</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('cargo.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cargos</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('sucursal.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sucursales</p>
                  </a>
                </li>
              </ul>
            </li>
          </li>  
        </li>




        {{-- FIN SUBSISTEMA RECURSOS HUMANOS --}}




        {{-- INICIO SUBSISTEMA ENCOMIENDA --}}

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
            <li class="nav-item">
              <a href="{{route('graficos.index')}}" class="nav-link">
                <i class="far fa-chart-bar nav-icon"></i>
                <p>Reporte</p>
              </a>
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
@yield('script')
</body>
</html>
