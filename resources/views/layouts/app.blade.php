<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--Icono-->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link type="text/css" rel="stylesheet" href="../css/propio.css" media="screen,projection" />

    <!-- Java -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--Metas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ViB Jobs</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="../img/logo.png" alt="Logo" width="50" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item mx-3 me-1">
                            <a class="nav-link text-light lh-lg" href="{{ url('/') }}">Empleos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light lh-lg" href="{{ url('ofertas/'.$user) }}">Mis Ofertas</a>
                        </li>


                        @if(Auth::user()->is_business)
                        <li class="nav-item">
                            <a class="nav-link text-light lh-lg" href="form">Crear Oferta</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link text-light lh-lg disabled" href="mensajes">Mensajes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light lh-lg disabled" href="#">Notificaciones</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('registrar') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="../img/yo.jpg" width="40px" height="40px" class="rounded-circle">
                            </a>


                            <ul class="dropdown-menu-end dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('miperfil') }}">Mi perfil</a></li>
                                <li><a class="dropdown-item" href="{{ url('ajustes') }}">Ajustes</a></li>
                                <li><a class="dropdown-item" href="#">Ayuda</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>


                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <footer class="pt-5 foot text-light">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h5><b>Nosotros</b></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ayuda</a></li>
                        <li class="nav-item mb-2"><a href="{{ url('legal') }}" class="nav-link p-0 text-muted">Condiciones legales</a></li>
                        <li class="nav-item mb-2"><a href="{{ url('privacidad') }}" class="nav-link p-0 text-muted">Política de Privacidad</a></li>
                        <li class="nav-item mb-2"><a href="{{ url('legal#legalcookies') }}" class="nav-link p-0 text-muted">Política de cookies</a></li>
                    </ul>
                </div>

                <div class="col-3">
                    <h5><b>Sobre VibJobs</b></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="{{ url('/') }}" class="nav-link p-0 text-muted">Ofertas de empleo</a></li>
                        <li class="nav-item mb-2"><a href="{{ url('ajustes') }}" class="nav-link p-0 text-muted">Ajustes</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    </ul>
                </div>


                <div class="col-4 offset-1">
                    <form>
                        <h5><b>Suscribete a nuestra newsletter</b></h5>
                        <p class="text-muted">¡No te pierdas las nuevas ofertas!</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Correo electrónico</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Correo electrónico">
                            <button class="btn btn-primary" type="button">Suscribete</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 mt-4 border-top">
                <p>© 2021 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="https://twitter.com/VIDALIBARRAQUER"><i class="bi bi-twitter"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.instagram.com/insf.vidalibarraquer/"><i class="bi bi-instagram"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.facebook.com/pages/IES-Vidal-i-Barraquer/111806272172159"><i class="bi bi-facebook"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.youtube.com/user/insvidalibarraquer/videos"><i class="bi bi-youtube"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.vidalibarraquer.net/moodle"><i class="bi bi-mortarboard-fill"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>