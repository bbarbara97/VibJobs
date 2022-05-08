@extends('layouts.app')

@section('content')
    <div class="container text-start w-75 mx-auto mt-5">
        <h2>Mi Perfil</h2>
        <hr class="bg-danger">
    </div>

    <ul class="list-unstyled">
        <li>
            <div class="card text-justify ml-10 w-48 mx-5 mt-5 shadow">
                <div class="card-body">
                    <div class="row" id="r2">
                        <div class="col-9">
                            <h4 class="card-title ms-2 mt-2">Mis datos personales</h4>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="add"><i class="bi bi-plus-circle"></i>  Subir foto</button>
                        </div>
                        </div>
                        <!-- <h4 class="card-title ms-2 mt-2">Mis datos personales</h4> -->
                        <hr>
                        <h4 class="card-subtitle mb-2 ms-2 text-dark"><b>Bárbara Broto</b></h4>
                        <h6 class="card-subtitle mb-2 ms-2 text-light">19/03/1997</h6>
                        <h6 class="card-subtitle mb-2 ms-2 text-light">39935230P</h6>
                        <h6 class="card-subtitle mb-2 ms-2 text-light">Cambrils (Tarragona) 43850</h6> <br>
                        <h6 class="card-subtitle mb-2 ms-2 text-light">barbara.broto97@gmail.com</h6> <br>
                        <h6 class="card-subtitle mb-2 ms-2 text-light">649894027</h6>
                        <img src="../img/yo.jpg" width="100px" height="100px" class="rounded-circle abs">

                    </div>
                </div>
        </li>
        <li>
            <div class="card text-justify w-30 mx-auto mt-5 shadow abs2">
                <div class="card-body">
                    <button class="btn btn-primary" onclick=""><i class="bi bi-plus-circle"></i> Añadir
                        conocimientos</button> <br><br>
                    <button class="btn btn-primary" onclick=""><i class="bi bi-plus-circle"></i> Añadir CV</button> <br>
                    <hr>
                    <h4 class="card-subtitle mb-2 ms-2 text-light">16/12/2021</h4>
                    <h6 class="card-subtitle mb-2 ms-2 text-light">Última actividad del CV</h6>
                    <hr>
                    <button class="btn btn-primary" onclick=""><i class="bi bi-plus-circle"></i> Añadir carta de
                        presentación</button>


                </div>
            </div>
        </li>
        <li>
            <div class="card text-justify ml-10 w-48 mx-5 mt-5 shadow">
                <div class="card-body">
                    <div class="row" id="r2">
                        <div class="col-9">
                            <h4 class="card-title ms-2 mt-2">Experiencia</h4>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="add">Añadir</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row" id="row">
                        <div class="col-9">
                            <h5 class="card-subtitle mb-2 ms-2 text-dark"><b> Programador</b></h5>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Empresa</h6>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Junio 2020-Abril 2021</h6>
                            <p class="mb-2 ms-2 fst-italic">Empleado/a <br>
                                Tareas que se hacian en la empresa</p>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="edit">Editar</button>
                        </div>

                    </div>
                    <!-- <div class="card rgb2 text-justify w-100 mx-1 mt-3 ">
                        <h6 class="card-subtitle mb-2 ms-2">Empleado/a <br>
                            Tareas que se hacian en la empresa</h6>
                    </div> -->
                </div>
            </div>
        </li>
        <li>
            <div class="card text-justify ml-10 w-48 mx-5 mt-5 shadow">
                <div class="card-body">
                    <div class="row" id="r2">
                        <div class="col-9">
                            <h4 class="card-title ms-2 mt-2">Estudios</h4>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="add">Añadir</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row" id="row">
                        <div class="col-9">
                            <h5 class="card-subtitle mb-2 ms-2 text-dark"><b>Técnico Superior en Desarrollo Aplicaciones
                                    Web</b>
                            </h5>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Institut F. Vidal i Barraquer</h6>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Septiembre 2020 - Actualmente</h6>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="edit">Editar</button>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="row">
                        <div class="col-9">
                            <h5 class="card-subtitle mb-2 ms-2 text-dark"><b>Estética y Belleza</b></h5>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Institut Cal·lípolis</h6>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Septiembre 2015 - Septiembre 2016</h6>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="edit">Editar</button>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="row">
                        <div class="col-9">
                            <h5 class="card-subtitle mb-2 ms-2 text-dark"><b>Educación Secundaria Obligatoria</b></h5>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Institut Ramón Berenguer IV</h6>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Septiembre 2010 - Septiembre 2015</h6>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="edit">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="card text-justify ml-10 w-48 mx-5 mt-5 shadow">
                <div class="card-body">
                    <div class="row" id="r2">
                        <div class="col-9">
                            <h4 class="card-title ms-2 mt-2">Idiomas</h4>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="add">Añadir</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row pt-2 mb-2" id="row">

                        <div class="col-3">
                            <h6 class="card-subtitle mb-2 ms-2 text-light"><b>Español</b></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Nativo</h6>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="editar">Editar</button>
                        </div>
                        <!-- <button class="btn btn-primary px-1">Editar</button> -->


                    </div>
                    <div class="row pt-2 mb-2" id="row">
                        <div class="col-3">
                            <h6 class="card-subtitle mb-2 ms-2 text-light"><b>Catalán</b></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Avanzado</h6>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="editar">Editar</button>
                        </div>
                    </div>
                    <div class="row pt-2 mb-2" id="row">
                        <div class="col-3">
                            <h6 class="card-subtitle mb-2 ms-2 text-light"><b>Inglés</b></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 ms-2 text-light">Básico</h6>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="editar">Editar</button>
                        </div>
                    </div>

                </div>
        </li>
        <li>
            <div class="card text-justify ml-10 w-48 mx-5 mt-5 shadow">
                <div class="card-body">
                    <div class="row" id="r2">
                        <div class="col-9">
                            <h4 class="card-title ms-2 mt-2">Otros datos</h4>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary px-1" id="add" onclick="edit()">Editar</button>
                        </div>
                    </div>
                    <hr>
                    <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Carnet de conducir</b></h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light">Sí</h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Vehículo propio</b></h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light">Sí</h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Nacionalidad</b></h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light">España</h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Permiso de trabajo</b></h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light">Unión Europea</h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Autónomo</b></h6>
                    <h6 class="card-subtitle mb-2 ms-2 text-light">No</h6>
                </div>
            </div>
        </li>
    </ul>
@endsection