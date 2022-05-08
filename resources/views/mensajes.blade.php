<!DOCTYPE html>
<html lang="es">

<head>
    <!--Icono-->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link type="text/css" rel="stylesheet" href="../css/propio.css" media="screen,projection" />

    <!-- Java -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!--Metas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ViB Jobs</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow">
        <div class="container-fluid ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a href="inicio - copia.html" class="brand-logo"><img src="../img/logo.png" alt="Logo" width="50" height="50"></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100" style="display: contents;">
                    <li class="nav-item mx-3 me-1">
                        <a class="nav-link text-light lh-lg" href="inicio - copia.html">Empleos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light lh-lg" href="ofertas.html">Mis Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light lh-lg" href="mensajes.html">Mensajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light lh-lg" href="#">Notificaciones</a>
                    </li>
                    <li class="nav-item dropdown ms-auto">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../img/yo.jpg" width="40px" height="40px" class="rounded-circle">
                            <!-- <i class="bi bi-person-circle h3"></i> -->
                        </a>
                        <ul class="dropdown-menu-end dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="miperfil.html">Mi perfil</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Idioma</a></li> -->
                            <li><a class="dropdown-item" href="ajustes.html">Ajustes</a></li>
                            <li><a class="dropdown-item" href="#">Ayuda</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <div class="container text-start w-75 mx-auto mt-5">
        <h2>Mensajes</h2>
        <hr class="bg-danger">
    </div>


    <div class="card px-4 py-4 mx-5">
    <div class="card-group mx-5 mensaje">
        <div class="card rgb2">
          <div class="card-body">
            <h5 class="card-title">Emma Flores</h5>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card rgb2" id="derecha">
          <div class="card-body">
            <p class="card-text">Hola! Cuanto tiempo sin verte.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- <ul class="list-unstyled">
        <li>
            <div class="card text-justify w-75 mx-auto mt-5 shadow">
                <div class="card-body">

                    <h4 class="card-title ms-2 mt-2">Desarrollador web</h4>
                    <h5 class="card-subtitle mb-2 ms-2 text-light">Empresa</h5>
                    <p class="mb-2 ms-2"><i class="bi bi-stopwatch"></i> 14 de jul 2021</p> 

                </div>
        </li>
        <li>
            <div class="card text-justify w-75 mx-auto mt-5 shadow">
                <div class="card-body">

                    <h4 class="card-title ms-2 mt-2">Desarrollador web</h4>
                    <h5 class="card-subtitle mb-2 ms-2 text-light">Empresa</h5>
                    <p class="mb-2 ms-2"><i class="bi bi-stopwatch"></i> 14 de jul 2021</p> 

                </div>
        </li>
    </ul> -->
</body>

</html>