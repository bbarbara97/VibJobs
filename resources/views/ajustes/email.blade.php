@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mx-5 py-5 bg-cc" style="padding-left: 30%!important;
    padding-right: 29%;">
        <h3 class="text-center">Cambiar email</h3>
        <br>
        <p>E-mail actual: {{$email}} </p>
        <form method="POST" action="{{ url('chemail/update') }}">
            @csrf
            <p>Nuevo e-mail:</p> <input type="email" name="email" id="email" class="w-75"> <br> <br>
            <input type="submit" value="Guardar" class="btn btn2 btn-primary">
        </form>
    </div>
</div>
@endsection