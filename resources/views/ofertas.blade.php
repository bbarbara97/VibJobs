@extends('layouts.app')

@section('content')
    <br>
    <div class="container text-start w-75 mx-auto mt-5">
        <h2>Mis ofertas</h2>
        <p>Candidaturas Activas</p>
        <hr class="bg-danger">
    </div>

    <ul class="list-unstyled">
        @foreach($user->ofertas as $oferta)
        <li>
            <div class="card text-justify w-75 mx-auto mt-5 shadow">
                <div class="card-body">

                <h4 class="card-title ms-2 mt-2">{{ $oferta->name }} ({{$oferta->course}})</h4>
                <h5 class="card-subtitle mb-2 ms-2 text-light">{{ $oferta->location }}</h5>
                <p class="mb-2 ms-2"><b>Tipo de contrato:</b> {{ $oferta->contract }} </p>
                <p class="mb-2 ms-2"><b>Descripción: </b> {{ $oferta->description }}</p>
                <p class="mb-2 ms-2"><b>Requisitos: </b>{{ $oferta->requeriments }}</p>

                </div>
        </li>
        @endforeach
    </ul>
@endsection