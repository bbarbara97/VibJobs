@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mx-5 py-5 bg-cc" style="padding-left: 30%!important;
    padding-right: 29%;">
        <h3 class="text-center">Editar experiencia</h3>
        <br>
        <h5>Datos de tu experiencia:  </h5> <br>
        <form method="POST" action="{{ url('modexp/'.$experiencia->id) }}">
            @csrf
            <p>Puesto de trabajo:</p> <input value="{{ $experiencia->name }}" class="form-control" id="name" type="text" name="name" required autocomplete="name" autofocus> <br>
            <p>Empresa:</p> <input value="{{ $experiencia->business }}" class="form-control" id="business" type="text" name="business" required autocomplete="business" autofocus> <br>
            <p>Tiempo trabajado:</p> <input value="{{ $experiencia->time }}" class="form-control" id="time" type="text" name="time" required autocomplete="time" autofocus> <br>
            <p>Descripción:</p> <textarea class="form-control" placeholder="Descripción" id="description" name="description" required autocomplete="description" autofocus>{{ $experiencia->description }}</textarea> <br>
            <input type="submit" value="Guardar" class="btn btn2 btn-primary">
        </form>
    </div>
</div>
@endsection