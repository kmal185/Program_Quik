<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.ProgramQuik', 'Program_Quik') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- CSS de Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-gNR6NLD9Ysnp0yBbE+j0WfsR85UfP6UOhfn6qL1eTQ2G9S1SgHNEyfOG7iW+nkr8p4iV4xFwZi//7VW0E8z9Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- JS de Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-cL/iwAMxnfNATugKKRmn9kD9TTMKf+G3kkpzg+QlBflJex0FZwJx0xIa+Pp5r5CFoFKkMBdV+0Al8rvKtD1JtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                
        
                <div id="layoutSidenav">
                    <div id="layoutSidenav_nav">
                        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                            <div class="sb-sidenav-menu">
                                <div class="nav">
                                    <div class="sb-sidenav-menu-heading">Inicio</div>
                                    <a class="nav-link" href="{{route('dashboard')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Inicio
                                    </a>
                                    <div class="sb-sidenav-menu-heading">Interfaz</div>
                                    <a class="nav-link" href="empleado">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Colaboradores
                                    </a>
                                    <div class="sb-sidenav-menu-heading">Complementos</div>
                                    <a class="nav-link" href="{{route('chart')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                        Graficas
                                    </a>
                                    <a class="nav-link" href="{{route('tablas')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Tablas
                                    </a>
                                </div>
                            </div>
                            <div class="sb-sidenav-footer">
                                <div class="small">Conectado como:</div>
                                <br>{{ Auth::user()->name }} 
                            
                            </div>
                        </nav>
                    </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card-header">
                        <h1 class="mt-4">Colaboradores</h1>
                        <br>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Inicio</a></li>
                            <li class="breadcrumb-item active">Colaboradores</li>
                        </ol>
                        <div class="card mb-1">
                            <div class="card-body">
                                Señor usuario en este espacio podra crear nuevos colaboradores dentro de la organizacion.
                           </div>
                        </div>
                        
                        <main class="py-4">
                            @yield('content')
                        </main>
                        <footer class="py-4 bg-light mt-auto">
                            <div class="container-fluid px-4">
                                <div class="d-flex align-items-center justify-content-between small">
                                    <div class="text-muted">Copyright &copy; 2023   Quik S.A.S.</div>
                                    
                                </div>
                            </div>
                        </footer>
                    </div>
                </main>             
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

        @stack('modals')

        @livewireScripts
    </body>
</html>