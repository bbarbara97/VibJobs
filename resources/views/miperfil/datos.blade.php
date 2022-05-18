@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mx-5 py-5 bg-cc" style="padding-left: 30%!important;
    padding-right: 29%;">
        <h3 class="text-center">Añadir datos</h3>
        <br>
        <h5>Datos de tu experiencia:  </h5> <br>
        <form method="POST" action="{{ url('datos/update') }}">
            @csrf
            <p>Carnet de conducir:</p> <input class="form-control" id="license" type="text" name="license" required autocomplete="license" autofocus> <br>
            <p>Vehiculo propio:</p> <input class="form-control" id="vehicle" type="text" name="vehicle" required autocomplete="vehicle" autofocus> <br>
            <p>Nacionalidad:</p> <input class="form-control" id="nationality" type="text" name="nationality" required autocomplete="nationality" autofocus> <br>
            <p>Permiso de trabajo:</p> <input class="form-control" id="work" type="text" name="work" required autocomplete="work" autofocus> <br>
            <p>Autónomo:</p> <input class="form-control" id="autonomous" type="text" name="autonomous" required autocomplete="autonomous" autofocus> <br>  
            <input type="submit" value="Guardar" class="btn btn2 btn-primary">
        </form>
    </div>
</div>
@endsection