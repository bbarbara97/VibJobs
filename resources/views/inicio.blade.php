@extends('layouts.app')

@section('content')
<div class="card text-center w-75 mx-auto mt-5">
    <div class="card-header h1 text-light">
        Bienvenido/a {{ Auth::user()->name }}
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-around">
            <div>
                <p class="card-text text-start text-light">Busco ofertas de...</p>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div>
                <p class="card-text text-start text-light">En...</p>
                <input type="text" list="cities" name="cities" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                <datalist id="cities"></datalist>
            </div>
        </div>
        <a href="#" class="btn btn-success">Buscar</a>

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
                <input type="submit" class="btn btn-success" value="Inscribirse">
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
@endsection