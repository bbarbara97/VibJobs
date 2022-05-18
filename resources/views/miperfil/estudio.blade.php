@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mx-5 py-5 bg-cc" style="padding-left: 30%!important;
    padding-right: 29%;">
        <h3 class="text-center">Añadir estudios</h3>
        <br>
        <h5>Datos de tu experiencia:  </h5> <br>
        <form method="POST" action="{{ url('estudio/update') }}">
            @csrf
            <p>Título:</p> <input class="form-control" id="name" type="text" name="name" required autocomplete="name" autofocus> <br>
            <p>Centro:</p> <input class="form-control" id="institute" type="text" name="institute" required autocomplete="institute" autofocus> <br>
            <p>Tiempo cursado (Mes y año inicio, mes y año fin.):</p> <input class="form-control" id="time" type="text" name="time" required autocomplete="time" autofocus> <br>
            <input type="submit" value="Guardar" class="btn btn2 btn-primary">
        </form>
    </div>
</div>
@endsection