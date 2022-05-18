@extends('layouts.app')

@section('content')
<div class="card text-center w-75 mx-auto mt-5">
    <div class="card-header h1 text-light">
        Bienvenido/a {{ Auth::user()->name }}
    </div>

    <div class="card-body">
        <div class="d-flex justify-content-around">
            <form method="GET" action="{{ url('/')}}" class="form-inline">
                <div>
                    <p class="card-text text-start text-light">Busco ofertas del ciclo de...</p>
                    <select id="course" class="form-select @error('course') is-invalid @enderror" aria-label="Default select example" name="searchCourse" required autocomplete="course" autofocus>
                        <option value="BAT" {{ $filters['searchCourse'] == 'BAT' ? 'selected' : '' }}>Bachillerato</option>
                        <optgroup label="SSCC">
                            <option value="APSD" {{ $filters['searchCourse'] == 'APSD' ? 'selected' : '' }}>CFGM Atención a Personas en Situación de Dependencia</option>
                            <option value="AST" {{ $filters['searchCourse'] == 'AST' ? 'selected' : '' }}>CFGS Animación Sociocultural y Turística</option>
                            <option value="EI" {{ $filters['searchCourse'] == 'EI' ? 'selected' : '' }}>CFGS Educación Infantil</option>
                            <option value="IS" {{ $filters['searchCourse'] == 'IS' ? 'selected' : '' }}>CFGS Integración Social</option>
                        </optgroup>
                        <optgroup label="COM" {{ $filters['searchCourse'] == 'COM' ? 'selected' : '' }}>
                            <option value="AC" {{ $filters['searchCourse'] == 'AC' ? 'selected' : '' }}>CFGM Actividades Comerciales</option>
                            <option value="CI" {{ $filters['searchCourse'] == 'CI' ? 'selected' : '' }}>CFGS Comercio Internacional</option>
                            <option value="GVEC" {{ $filters['searchCourse'] == 'GVEC' ? 'selected' : '' }}>CFGS Gestión de Ventas y Espacios Comerciales</option>
                            <option value="MP" {{ $filters['searchCourse'] == 'MP' ? 'selected' : '' }}>CFGS Marqueting y Publicidad</option>
                            <option value="TL" {{ $filters['searchCourse'] == 'TL' ? 'selected' : '' }}>CFGS Transporte y Logística</option>
                        </optgroup>
                        <optgroup label="INFO">
                            <option value="SMX" {{ $filters['searchCourse'] == 'SMX' ? 'selected' : '' }}>CFGM Sistemas Microinformáticos y Redes</option>
                            <option value="ASIX" {{ $filters['searchCourse'] == 'ASIX' ? 'selected' : '' }}>CFGS Administración de Sistemas Informáticos en la Red, Perfil Profesional Ciberseguridad</option>
                            <option value="DAM" {{ $filters['searchCourse'] == 'DAM' ? 'selected' : '' }}>CFGS Desarrollo de Aplicaciones Multiplataforma</option>
                            <option value="DAW" {{ $filters['searchCourse'] == 'DAW' ? 'selected' : '' }}>CFGS Desarrollo de Aplicaciones Web</option>
                            <option value="ECET" {{ $filters['searchCourse'] == 'ECET' ? 'selected' : '' }}>Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de la Información</option>
                        </optgroup>
                        <optgroup label="ADMIN">
                            <option value="GA" {{ $filters['searchCourse'] == 'GA' ? 'selected' : '' }}>CFGM Gestión Administrativa</option>
                            <option value="GAJ" {{ $filters['searchCourse'] == 'GAJ' ? 'selected' : '' }}>CFGM Gestión Administrativa (Ámbito Jurídico)</option>
                            <option value="AF" {{ $filters['searchCourse'] == 'AF' ? 'selected' : '' }}>CFGS Administración y Finanzas</option>
                            <option value="AD" {{ $filters['searchCourse'] == 'AD' ? 'selected' : '' }}>CFGS Asistencia a la Dirección</option>
                        </optgroup>
                    </select>
                    <!-- <input type="search" name="searchCourse" value="{{ $filters['searchCourse'] }}" placeholder="Ej: DAW" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> -->
                </div>
                <div>
                    <p class="card-text text-start text-light">En...</p>
                     
                    <input type="search" list="cities" name="searchLocation" value="{{ $filters['searchLocation'] }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    <datalist id="cities"></datalist>
                </div>
                <br>
                <input type="submit" value="Buscar" class="btn btn2 btn-success">
            </form>
        </div>
        <!-- <a href="#" class="btn btn-success">Buscar</a> -->

    </div>
</div>

<div class="container text-start w-75 mx-auto mt-5">
    <h2>Ofertas para ti</h2>
    <p>Basadas en tu curso</p>
    <hr class="bg-danger">
</div>
<ul class="list-unstyled">


    @foreach($ofertas as $oferta)
    <li>
        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">
                <form method="POST" action="{{ url('/'.$user.'/enrol/'.$oferta->id) }}">
                    @csrf
                    <h4 class="card-title ms-2 mt-2">{{ $oferta->name }} ({{$oferta->course}})</h4>
                    <h5 class="card-subtitle mb-2 ms-2 text-light">{{ $oferta->location }}</h5>
                    <p class="mb-2 ms-2"><b>Tipo de contrato:</b> {{ $oferta->contract }} </p>
                    <p class="mb-2 ms-2"><b>Descripción: </b> {{ $oferta->description }}</p>
                    <p class="mb-2 ms-2"><b>Requisitos: </b>{{ $oferta->requeriments }}</p>
                    @if(Auth::user()->is_admin)   
                    <input type="submit" class="btn btn2 btn-success" value="Inscribirse">
                    @endif
                    <!-- <a href="#" class="btn btn-success">Inscribirse</a> -->
                </form>
            </div>
    </li>
    @endforeach

</ul>

<script>
    var cities = new Array('Aiguamúrcia', 'Alcover', 'Alió', 'Bràfim', 'Cabra del Camp', 'Figuerola del Camp', 'Els Garidells', 'La Masó', 'El Milà', 'Montferri', 'Mont-ral', 'Nulles', 'El pla de Santa Maria', "El Pont d'Armentera", 'Puigpelat', 'Querol', 'La Riba', 'Rodonyà', 'El Rourell', 'Vallmoll', 'Valls', 'Vilabella', 'Vila-rodona', "L'Albiol", "L'Aleixar", 'Alforja', 'Almoster', "L'Arbolí", "L'Argentera", 'Les Borges del Camp', 'Botarell', 'Cambrils', 'Capafonts', 'Castellvell del Camp', 'Duesaigües', 'La Febró', 'Maspujols', 'Montbrió del Camp', 'Mont-roig del Camp', 'Prades', 'Pratdip', 'Reus', 'Riudecanyes', 'Riudecols', 'Riudoms', 'La Selva del Camp', "Vandellòs i l'Hospitalet de l'infant", "Vilanova d'Escornalbou", 'Vilaplana', 'Vinyols i els Arcs', "L'Aldea", 'Aldover', 'Alfara de Carles', "L'Ametlla de Mar", "L'Ampolla", 'Benifallet', 'Camarles', 'Xerta', 'Deltebre', 'Paüls', 'El Perelló', 'Roquetes', 'Tivenys', 'Tortosa', 'Albinyana', "L'Arboç", 'Banyeres del Penedès', 'Bellvei', 'La Bisbal del Penedès', 'Bonastre', 'Calafell', 'Cunit', 'Llorenç del Penedès', 'Masllorenç', 'El Montmell', 'Sant Jaume dels Domenys', 'Santa Oliva', 'El Vendrell', 'Barberà de la Conca', 'Blancafort', 'Conesa', "L'espluga de Francolí", 'Forès', 'Llorac', 'Montblanc', 'Passanant i Belltall', 'Les Piles', 'Pira', 'Pontils', 'Rocafort de Queralt', 'Santa Coloma de Queralt', 'Sarral', 'Savallà del Comtat', 'Senan', 'Solivella', 'Vallclara', 'Vallfogona de Riucorb', 'Vilanova de Prades', 'Vilaverd', 'Vimbodí i Poblet', 'Ascó', 'Benissanet', 'Flix', 'García', 'Ginestar', 'Miravet', "Móra d'Ebre", 'Móra la Nova', "La Palma d'Ebre", 'Rasquera', "Riba-roja d'Ebre", 'Tivissa', "La Torre de l'Espanyol", 'Vinebre', 'Alcanar', 'Amposta', 'La Sénia', 'Freginals', 'La Galera', 'Godall', 'Mas de Barberans', 'Masdenverge', 'Sant Carles de la Ràpita', "Sant Jauma d'Enveja", 'Santa Bàrbara', 'Ulldecona', 'Bellmunt del Priorat', 'La Bisbal de Falset', 'Cabacés', 'Capçanes', 'Cornudella de Montsant', 'Falset', 'La Figuera', 'Gratallops', 'Els Guiamets', 'El Lloar', 'Margalef', 'Marçà', 'El Masroig', 'El Molar', 'La Morera de Montsant', 'Pobleda', 'Porrera', 'Pradell de la Teixeta', 'La Torre de Fontaubella', 'Torroja del Priorat', 'Ulldemolins', 'La Vilella Alta', 'La Vilella Baixa', 'Altafulla', 'La Canonja', 'El Catllar', 'Constantí', 'Creixell', 'El Morell', 'La Nou de Gaià', 'Els Pallaresos', 'Perafort', 'La Pobla de Mafumet', 'La Pobla de Montornès', 'Renau', 'La Riera de Gaià', 'Roda de Barà', 'Salomó', 'Salou', 'La Secuita', 'Tarragona', 'Torredembarra', 'Vespella de Gaià', 'Vilallonga del Camp', 'Vila-seca', 'Arnés', 'Batea', 'Bot', 'Caseres', "Corbera d'Ebre", 'La Fatarella', 'Gandesa', 'Horta de Sant Joan', 'La Pobla de Massaluca', 'El Pinell de Brai', 'Prat de Comte', 'Vilalba dels Arcs');


    var options = '';

    for (var i = 0; i < cities.length; i++) {
        options += '<option value="' + cities[i] + '" />';
    }

    document.getElementById('cities').innerHTML = options;
</script>


{{ $ofertas->links('vendor.pagination.pagin') }}
@endsection