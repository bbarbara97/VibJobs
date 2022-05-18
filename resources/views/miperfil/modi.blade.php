@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mx-5 py-5 bg-cc" style="padding-left: 30%!important;
    padding-right: 29%;">
        <h3 class="text-center">Editar idiomas</h3>
        <br>
        <h5>Datos de tu experiencia:  </h5> <br>
        <form method="POST" action="{{ url('modi/'.$idioma->id) }}">
            @csrf
            <p>Idioma:</p> <input value="{{ $idioma->name }}" class="form-control" id="name" type="text" name="name" required autocomplete="name" autofocus> <br>
            <p>Nivel:</p> <input value="{{ $idioma->level }}" class="form-control" id="level" type="text" name="level" required autocomplete="level" autofocus> <br>
            <input type="submit" value="Guardar" class="btn btn2 btn-primary">
        </form>
    </div>
</div>
@endsection