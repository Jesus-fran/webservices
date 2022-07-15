<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de riego</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <link rel="icon" type="image/jpg" href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>

<body>


    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('home') }}">Sistema de riego</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">

            </div>
        </div>
        <br>
        <br>
        <br>
    </header>

    <div class="container-fluid">

        @section('contenido_gnrl')
            <div class="row">

                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">

                                    Panel principal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('plantas') }}">

                                    Plantas

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sensores') }}">

                                    Control de sensores

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sensores') }}">

                                    Control de sensores

                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Estadisticas</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <br>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span data-feather="file-text"></span>
                                    Reportes de plantas
                                </a>
                            </li>
                            <br><br>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">
                                    <span data-feather="file-text"></span>
                                    Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>


                <!-- Contenido -->
                <main class="col-md-9 ms-sm-auto col-lg-10 contenido">

                @section('contenido')
                    <div class="row home_banner">
                        <div class="row">
                            <div class="col-4 offset-4 text-center d-md-block d-none">
                                <br>
                                <br>
                                <br>
                                <h6>¡Bienvenido, ya puedes monitorear tus plantas!</h6>
                            </div>
                            <div class="col-sm-12 text-center d-md-none d-sm-block">
                                <br>
                                <h6>¡Bienvenido, ya puedes monitorear tus plantas!</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-12 offset-md-3 text-center">
                                <a class="btn btns-panel" href="{{ route('plantas') }}">Examinar plantas</a>
                            </div>
                            <div class="col-md-3 col-sm-12 text-center">
                                <a class="btn btns-panel" href="{{ route('sensores') }}">Examinar sensores</a>
                            </div>
                        </div>
                    </div>
                @show
            </main>
        </div>
    @show
</div>

</body>

</html>
