@extends('layouts.app')

@section('content')

    <div class="container card text-center mt-5 w-50 mb-5 px-0">
    <div class="card-header">
        <h4 class="card-title text-light">Creación de la Oferta</h4>        
    </div>
    <div class="card-body">
      <!-- <h5 class="card-title">Inicio de sesión</h5> -->
      <div class=" d-flex justify-content-around text-start mx-5">

        <form method="POST" action="{{ url('form/store') }}">
          @csrf
          <p>Título de la oferta</p>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" value="{{ old('name') }}" required autocomplete="name"> <br>

        @error('name')
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

        <p>Tipo de contrato</p>
        <input id="contract" type="text" class="form-control" name="contract" required autocomplete="contract"> <br>

        <p>Ciclo al que va dirigida la oferta</p>
        <select id="course" class="form-select @error('course') is-invalid @enderror" aria-label="Default select example" name="course" value="{{ old('course') }}" required autocomplete="course" autofocus>
            <option value="BAT">Bachillerato</option>
            <optgroup label="SSCC">
              <option value="APSD">CFGM Atención a Personas en Situación de Dependencia</option>
              <option value="AST">CFGS Animación Sociocultural y Turística</option>
              <option value="EI">CFGS Educación Infantil</option>
              <option value="IS">CFGS Integración Social</option>
            </optgroup>
            <optgroup label="COM">
              <option value="AC">CFGM Actividades Comerciales</option>
              <option value="CI">CFGS Comercio Internacional</option>
              <option value="GVEC">CFGS Gestión de Ventas y Espacios Comerciales</option>
              <option value="MP">CFGS Marqueting y Publicidad</option>
              <option value="TL">CFGS Transporte y Logística</option>
            </optgroup>
            <optgroup label="INFO">
              <option value="SMX">CFGM Sistemas Microinformáticos y Redes</option>
              <option value="ASIX">CFGS Administración de Sistemas Informáticos en la Red, Perfil Profesional Ciberseguridad</option>
              <option value="DAM">CFGS Desarrollo de Aplicaciones Multiplataforma</option>
              <option value="DAW">CFGS Desarrollo de Aplicaciones Web</option>
              <option value="ECET">Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de la Información</option>
            </optgroup>
            <optgroup label="ADMIN">
              <option value="GA">CFGM Gestión Administrativa</option>
              <option value="GAJ">CFGM Gestión Administrativa (Ámbito Jurídico)</option>
              <option value="AF">CFGS Administración y Finanzas</option>
              <option value="AD">CFGS Asistencia a la Dirección</option>
            </optgroup>
          </select>

        <p>Requisitos</p>
        <input id="requeriments" type="text" class="form-control @error('requeriments') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="requeriments" value="{{ old('requeriments') }}" required autocomplete="requeriments" autofocus> <br>

        @error('requeriments')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <p>Descripción de la oferta</p>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea> <br>

        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
          <input type="submit" value="Subir oferta" class="btn btn2 btn-primary">
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
    @endsection