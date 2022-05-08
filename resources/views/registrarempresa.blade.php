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
  <div class="container card text-center mt-5 w-50 mb-5 px-0">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="true" href="login">Inicio de sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="true" href="registrar">Registro Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active rgb" aria-current="true" href="registerbusiness">Registro Empresa</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <!-- <h5 class="card-title">Inicio de sesión</h5> -->
      <div class=" d-flex justify-content-around text-start">

        <form method="POST" action="{{ url('registerbusiness/store') }}">
          @csrf
          <p>Email</p>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="email" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <p> Contraseña (6 o más carácteres)</p>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="password" required autocomplete="new-password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <p>Confirmar contraseña</p>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

          <p>Nombre Empresa</p>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> <br>

          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <p>C.I.F / N.I.E</p>
          <input id="cif" type="text" class="form-control @error('cif') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="cif" value="{{ old('cif') }}" required autocomplete="cif" autofocus> <br>

          @error('cif')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <p>Teléfono</p>
          <input id="tlf" type="text" class="form-control @error('tlf') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tlf" value="{{ old('tlf') }}" required autocomplete="cif" autofocus> <br>

          @error('tlf')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <p>País/Región</p>
          <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus> <br>

          @error('country')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <p>Código postal</p>
          <input id="cp" type="text" class="form-control @error('cp') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="cp" value="{{ old('cp') }}" required autocomplete="cp" autofocus> <br>

          @error('country')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <p>Ubicación en esta zona (Localidad)</p>
          <input id="locations" list="locationsL" type="text" class="form-control @error('location') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="locations" value="{{ old('location') }}" required autocomplete="locations" autofocus> <br>

          <datalist id="locationsL"></datalist>

          @error('locations')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror


          <p>Descripción de la empresa</p>
            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Descripción" id="description" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
          <br>
          <input type="submit" value="Registrate!" class="btn btn-primary">
          <!-- <a href="#" class="btn btn-primary">Conectate!</a> <br> -->
          <span style="padding-top: 10px; visibility: hidden;">¿Todavía no te has registrado? ¡Registrate!</span>
        </form>
      </div>
    </div>
  </div>



  <script>
    var locations = new Array('Aiguamúrcia', 'Alcover', 'Alió', 'Bràfim', 'Cabra del Camp', 'Figuerola del Camp', 'Els Garidells', 'La Masó', 'El Milà', 'Montferri', 'Mont-ral', 'Nulles', 'El pla de Santa Maria', "El Pont d'Armentera", 'Puigpelat', 'Querol', 'La Riba', 'Rodonyà', 'El Rourell', 'Vallmoll', 'Valls', 'Vilabella', 'Vila-rodona', "L'Albiol", "L'Aleixar", 'Alforja', 'Almoster', "L'Arbolí", "L'Argentera", 'Les Borges del Camp', 'Botarell', 'Cambrils', 'Capafonts', 'Castellvell del Camp', 'Duesaigües', 'La Febró', 'Maspujols', 'Montbrió del Camp', 'Mont-roig del Camp', 'Prades', 'Pratdip', 'Reus', 'Riudecanyes', 'Riudecols', 'Riudoms', 'La Selva del Camp', "Vandellòs i l'Hospitalet de l'infant", "Vilanova d'Escornalbou", 'Vilaplana', 'Vinyols i els Arcs', "L'Aldea", 'Aldover', 'Alfara de Carles', "L'Ametlla de Mar", "L'Ampolla", 'Benifallet', 'Camarles', 'Xerta', 'Deltebre', 'Paüls', 'El Perelló', 'Roquetes', 'Tivenys', 'Tortosa', 'Albinyana', "L'Arboç", 'Banyeres del Penedès', 'Bellvei', 'La Bisbal del Penedès', 'Bonastre', 'Calafell', 'Cunit', 'Llorenç del Penedès', 'Masllorenç', 'El Montmell', 'Sant Jaume dels Domenys', 'Santa Oliva', 'El Vendrell', 'Barberà de la Conca', 'Blancafort', 'Conesa', "L'espluga de Francolí", 'Forès', 'Llorac', 'Montblanc', 'Passanant i Belltall', 'Les Piles', 'Pira', 'Pontils', 'Rocafort de Queralt', 'Santa Coloma de Queralt', 'Sarral', 'Savallà del Comtat', 'Senan', 'Solivella', 'Vallclara', 'Vallfogona de Riucorb', 'Vilanova de Prades', 'Vilaverd', 'Vimbodí i Poblet', 'Ascó', 'Benissanet', 'Flix', 'García', 'Ginestar', 'Miravet', "Móra d'Ebre", 'Móra la Nova', "La Palma d'Ebre", 'Rasquera', "Riba-roja d'Ebre", 'Tivissa', "La Torre de l'Espanyol", 'Vinebre', 'Alcanar', 'Amposta', 'La Sénia', 'Freginals', 'La Galera', 'Godall', 'Mas de Barberans', 'Masdenverge', 'Sant Carles de la Ràpita', "Sant Jauma d'Enveja", 'Santa Bàrbara', 'Ulldecona', 'Bellmunt del Priorat', 'La Bisbal de Falset', 'Cabacés', 'Capçanes', 'Cornudella de Montsant', 'Falset', 'La Figuera', 'Gratallops', 'Els Guiamets', 'El Lloar', 'Margalef', 'Marçà', 'El Masroig', 'El Molar', 'La Morera de Montsant', 'Pobleda', 'Porrera', 'Pradell de la Teixeta', 'La Torre de Fontaubella', 'Torroja del Priorat', 'Ulldemolins', 'La Vilella Alta', 'La Vilella Baixa', 'Altafulla', 'La Canonja', 'El Catllar', 'Constantí', 'Creixell', 'El Morell', 'La Nou de Gaià', 'Els Pallaresos', 'Perafort', 'La Pobla de Mafumet', 'La Pobla de Montornès', 'Renau', 'La Riera de Gaià', 'Roda de Barà', 'Salomó', 'Salou', 'La Secuita', 'Tarragona', 'Torredembarra', 'Vespella de Gaià', 'Vilallonga del Camp', 'Vila-seca', 'Arnés', 'Batea', 'Bot', 'Caseres', "Corbera d'Ebre", 'La Fatarella', 'Gandesa', 'Horta de Sant Joan', 'La Pobla de Massaluca', 'El Pinell de Brai', 'Prat de Comte', 'Vilalba dels Arcs');


    var options = '';

    for (var i = 0; i < locations.length; i++) {
      options += '<option value="' + locations[i] + '" />';
    }

    document.getElementById('locationsL').innerHTML = options;
  </script>
</body>

</html>