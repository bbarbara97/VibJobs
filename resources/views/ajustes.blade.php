@extends('layouts.app')

@section('content')
<div class="container text-start w-75 mx-auto mt-5">
    <h2>Ajustes</h2>
    <hr class="bg-danger">
</div>

<ul class="list-unstyled">
    <li>
        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">

                <h4 class="card-title ms-2 mt-2">Datos de acceso</h4>
                <hr>
                <a class="pinch" href="{{url('chemail')}}">
                    <h6 class="card-subtitle mb-2 ms-2 text-light punch"><i class="bi bi-envelope"></i> Cambiar e-mail</h6>
                </a> <br>
                <a class="pinch" href="{{url('pssw')}}">
                    <h6 class="card-subtitle mb-2 ms-2 text-light punch"><i class="bi bi-lock"></i> Cambiar contraseña</h6>
                </a> <br>
                <a class="pinch" href="{{url('direccion')}}">
                    <h6 class="card-subtitle mb-2 ms-2 text-light punch"><i class="bi bi-mailbox"></i> Cambiar dirección</h6>
                </a>

            </div>
    </li>
    <li>
        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">

                <h4 class="card-title ms-2 mt-2">Idioma</h4>
                <hr>
                <a class="pinch" href="#">
                    <h6 class="card-subtitle mb-2 ms-2 text-light punch"><img src="../img/spain-flag-round-icon-16.png"> Castellano</h6>
                </a> <br>
                <a class="pinch" id href="#">
                    <h6 class="card-subtitle mb-2 ms-2 text-light punch"><img src="../img/flag_catalonia_icon.png"> Català</h6>
                </a> <br>
                <a class="pinch" href="#">
                    <h6 class="card-subtitle mb-2 ms-2 text-light punch"><img src="../img/united-kingdom.png"> English</h6>
                </a>

            </div>
    </li>
    <li>
        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">
                <a class="pinch" onclick="mostrar()">
                    <h6 class="card-subtitle mb-2 ms-2 text-light punch" style="cursor: pointer;"><i class="bi bi-exclamation-triangle"></i> Darme de baja</h6>
                </a>
            </div>
        </div>

        <div class="card text-justify mx-auto mt-5 pb-4 shadow" id="darBaja" style="position: fixed;top: 35%;left: 35%;width: 30%;display:none">
            <h6 class="card-subtitle my-2 ms-2 text-light text-center"> ¿Estás seguro que quieres darte de baja?</h6>
            <label class="ms-5 mt-2 w-75"> <a href="/delete/{{$user}}" class="btn btn2 btn-primary ms-5 w-30">Sí</a><input type="button" value="No" onclick="mostrar()" class="btn btn2 btn-primary w-30 ms-2"></label>
        </div>
    </li>
</ul>
<script>
    var visible = true;

    function mostrar() {
        if (visible) {
            document.getElementById("darBaja").style.display = "block";
        } else {
            document.getElementById("darBaja").style.display = "none";
        }
        visible = !visible;
    }
</script>
@endsection