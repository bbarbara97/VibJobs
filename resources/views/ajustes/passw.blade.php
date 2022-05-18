@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mx-5 py-5 bg-cc" style="padding-left: 30%!important;
    padding-right: 29%;">
        <h3 class="text-center">Cambiar contraseña</h3>
        <br>
        <form method="POST" action="{{ url('pssw/update') }}">
            @csrf
            <p>Antigua contraseña:</p> <input type="password" name="password" id="password" class="w-75"> <br> <br>
            <p>Nueva contraseña:</p> <input type="password" name="password2" id="password2" class="w-75"> <br> <br>
            <input type="submit" value="Guardar" class="btn btn2 btn-primary">
        </form>
    </div>
</div>
@endsection