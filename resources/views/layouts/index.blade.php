<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VivaDent - @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tooth"></i>
                </div>
                <div class="sidebar-brand-text mx-3">VIVADENT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/')}}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('agenda') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/agenda')}}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Agenda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PACIENTES
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pacientes</span>
                </a>
                <div id="collapseUtilities" class="collapse 
                {{ request()->is('fichas/new') ? 'show' : '' }}
                {{ request()->is('pacientes') ? 'show' : '' }}" 
                
                aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Administrar pacientes:</h6>
                        @if(auth()->user()->personal->cargo == "Administrativo")
                        <a class="collapse-item {{ request()->is('fichas/new') ? 'active' : '' }}" href="{{url('/fichas/new')}}">Crear Nuevo</a>
                        @endif
                        <a class="collapse-item {{ request()->is('pacientes') ? 'active' : '' }}" href="{{url('/pacientes')}}">Listado</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ADMINISTRAR
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseInventario"
                    aria-expanded="true" aria-controls="collapseInventario">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Inventario</span>
                </a>
                <div id="collapseInventario" class="collapse 
                {{ request()->is('inventario') ? 'show' : '' }}
                {{ request()->is('proveedores') ? 'show' : '' }}" 
                
                aria-labelledby="headingInventario"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Administrar inventario:</h6>
                        <a class="collapse-item {{ request()->is('inventario') ? 'active' : '' }}" href="{{url('/inventario')}}">Listado</a>
                        <a class="collapse-item {{ request()->is('proveedores') ? 'active' : '' }}" href="{{url('/proveedores')}}">Proveedores</a>
                    </div>
                </div>
            </li>
            
            @if(auth()->user()->personal->cargo == "Administrador")
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePersonal"
                    aria-expanded="true" aria-controls="collapsePersonal">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Colaboradores</span>
                </a>
                <div id="collapsePersonal" class="collapse 
                {{ request()->is('personal/new') ? 'show' : '' }}
                {{ request()->is('personal') ? 'show' : '' }}" 
                
                aria-labelledby="headingPersonal"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Administrar Personal:</h6>
                            <a class="collapse-item {{ request()->is('personal/new') ? 'active' : '' }}" href="{{url('/personal/new')}}">Agregar Colaborador</a>
                        <a class="collapse-item {{ request()->is('personal') ? 'active' : '' }}" href="{{url('/personal')}}">Listado</a>
                    </div>
                </div>
            </li>
            
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-0">
                        <h3 class="h3 mb-0 text-gray-800">Cl??nica Dental NOMBRE</h3>
                    </div> --}}
                    <!-- Topbar Search -->
                    <div
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <ul class="navbar-nav ml-auto">
                        

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    {{-- <span class="badge badge-danger badge-counter">3+</span> --}}
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Notificaciones
                                    </h6>
                                    <div class="dropdown-item d-flex align-items-center" href="">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-trash-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            {{-- <div class="small text-gray-500">December 12, 2019</div> --}}
                                            <span class="font-weight-bold">No hay nuevas notificaciones</span>
                                        </div>
                                    </div>
                                    <div class="dropdown-item text-center small text-gray-500" href="">pr??ximamente</div>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    {{-- <span class="badge badge-danger badge-counter">7</span> --}}
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Mensajes
                                    </h6>
                                    <div class="dropdown-item d-flex align-items-center" href="">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-trash text-white"></i>
                                            </div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">No hay nuevos mensajes</div>
                                            {{-- <div class="small text-gray-500">Emily Fowler ?? 58m</div> --}}
                                        </div>
                                    </div>
                                    <div class="dropdown-item text-center small text-gray-500" href="">pr??ximamente</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{auth()->user()->personal->sexo == 'Hombre' ? asset('img/undraw_profile_2.svg') : asset('img/undraw_profile_3.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" data-target="#edit_password_modal-{{auth()->user()->id}}" data-toggle="modal">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cambiar Contrase??a
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesi??n
                                </a>
                                
                                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                @include('home.edit_password_modal')

                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Felipe Hern??ndez - Proyecto final 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('endor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    
    <script src="{{asset('fullcalendar/main.js')}}"></script>
    

</body>

</html>