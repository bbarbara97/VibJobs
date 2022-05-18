@extends('layouts.app')

@section('content')
<br>
<div class="container text-start w-75 mx-auto mt-5">
    <h2>Ofertas creadas</h2>
    <hr class="bg-danger">
</div>

<ul class="list-unstyled">
    @foreach($ofertas as $oferta)
    <li>

        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">
                    <h4 class="card-title ms-2 mt-2">{{ $oferta->name }} ({{$oferta->course}})</h4>
                    <h5 class="card-subtitle mb-2 ms-2 text-light">{{ $oferta->location }}</h5>
                    <p class="mb-2 ms-2"><b>Tipo de contrato:</b> {{ $oferta->contract }} </p>
                    <p class="mb-2 ms-2"><b>Descripción: </b> {{ $oferta->description }}</p>
                    <p class="mb-2 ms-2"><b>Requisitos: </b>{{ $oferta->requeriments }}</p>
                    
                    <a href="{{url('candidatos/'.$oferta->id) }}"  class="btn2 btn btn-success"> Comprobar Candidatos</a>
                    <a href="{{'deloferta/'.$oferta->id }}"  class="btn btn-danger">Eliminar oferta</a>

            </div>
        </div>

    </li>
    @endforeach
</ul>
@endsection