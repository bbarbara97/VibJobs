<!DOCTYPE html>
<html lang="es">

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
</head>

<body class="init">

    <div class="container card text-center mt-5 w-50 px-0">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active rgb" aria-current="true" href="login">Inicio de sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="registrar">Registro Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="registerbusiness">Registro Empresa</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <!-- <h5 class="card-title">Inicio de sesión</h5> -->
            <div class=" d-flex justify-content-around text-start">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <p>Correo electrónico</p>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror




                    <p> Contraseña (6 o más carácteres)</p>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror



                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recuerdame') }}
                        </label>
                    </div>
                    <br>

                    <div class="row mb-0">

                        <button type="submit" class="btn btn-primary">
                            Conectate!
                        </button>
                        @if (Route::has('password.request'))

                        <a href="{{ route('password.request') }}" class="text-center">
                            {{ __('Has olvidado tu contraseña?') }}
                        </a>
                        @endif

                    </div>
                    <span style="padding-top: 10px; visibility: hidden;">¿Todavía no te has registrado? ¡Registrate!</span>

                </form>
            </div>


        </div>
    </div>
</body>

</html>