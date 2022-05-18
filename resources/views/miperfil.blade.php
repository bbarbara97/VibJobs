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
                        <button class="btn btn2 btn-primary px-1" id="add"><i class="bi bi-plus-circle"></i> Subir foto</button>
                    </div>
                </div>
                <!-- <h4 class="card-title ms-2 mt-2">Mis datos personales</h4> -->
                <hr>
                <h4 class="card-subtitle mb-2 ms-2 text-dark"><b>{{ $userModel->student()->get('student_name')[0]->student_name  }} {{ $userModel->student()->get('student_surname')[0]->student_surname  }}</b></h4>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{ $userModel->student()->get('DNI')[0]->DNI  }}</h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{ $userModel->location}}({{ $userModel->country}}), {{ $userModel->cp}}</h6> <br>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{ $userModel->email}}</h6> <br>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{ $userModel->student()->get('course')[0]->course  }}</h6>
                <img src="../img/yo.png" width="100px" height="100px" class="rounded-circle abs">

            </div>
        </div>
    </li>
    <li>
        <div class="card text-justify w-30 mx-auto mt-5 shadow abs2">
            <div class="card-body">
                <button class="btn btn2 btn-primary" onclick=""><i class="bi bi-plus-circle"></i> Añadir
                    conocimientos</button> <br><br>
                <button class="btn btn2 btn-primary" onclick=""><i class="bi bi-plus-circle"></i> Añadir CV</button> <br>
                <hr>
                <h4 class="card-subtitle mb-2 ms-2 text-light">16/12/2021</h4>
                <h6 class="card-subtitle mb-2 ms-2 text-light">Última actividad del CV</h6>
                <hr>
                <button class="btn btn2 btn-primary" onclick=""><i class="bi bi-plus-circle"></i> Añadir carta de
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
                        <form action="{{url('experiencia')}}" method="GET">
                            <input type="submit" class="btn btn2 btn-primary px-1" id="add" value="Añadir">
                        </form>
                        <!-- <button class="btn btn-primary px-1" id="add">Añadir</button> -->
                    </div>
                </div>
                <hr>
                @foreach($exp as $experiencia)
                <div class="row" id="row">
                    <div class="col-9">
                        
                            <h5 class="card-subtitle mb-2 ms-2 text-dark"><b> {{ $experiencia->name}}</b></h5>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">{{ $experiencia->business}}</h6>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">{{ $experiencia->time}}</h6>
                            <p class="mb-2 ms-2 fst-italic"> {{$experiencia->description}}</p>
                            <a class="btn btn2 btn-success px-1" id="edit" style="position: absolute;margin-left: 74%;margin-top: -15%;" href="{{ url('/modE/'.$experiencia->id) }}">Editar</a>
                            
                    </div>
                </div>
                @endforeach
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
                        <form action="{{url('estudio')}}" method="GET">
                            <input type="submit" class="btn btn2 btn-primary px-1" id="add" value="Añadir">
                        </form>
                    </div>
                </div>
                <hr>
                @foreach($estudios as $estudio)
                <div class="row" id="row">
                    <div class="col-9">
                        
                            <h5 class="card-subtitle mb-2 ms-2 text-dark"><b>{{$estudio->name}}</b>
                            </h5>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">{{$estudio->institute}}</h6>
                            <h6 class="card-subtitle mb-2 ms-2 text-light">{{$estudio->time}}</h6>
                            <a class="btn btn2 btn-success px-1" id="edit" style="position: absolute;margin-left: 74%;margin-top: -10%;" href="{{ url('/modEst/'.$estudio->id) }}">Editar</a>
                            
                        </div>
                </div>
                @endforeach
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
                        <form action="{{url('idioma')}}" method="GET">
                            <input type="submit" class="btn btn2 btn-primary px-1" id="add" value="Añadir">
                        </form>
                    </div>
                </div>
                <hr>
                @foreach($idiomas as $idioma)
                <div class="row pt-2 mb-2" id="row">
                    <div class="col-3">
                        <h6 class="card-subtitle mb-2 ms-2 text-light"><b>{{$idioma->name}}</b></h6>

                        <h6 class="card-subtitle mb-2 ms-2 text-light">{{$idioma->level}}</h6>

                        <a class="btn btn2 btn-success px-1" id="edit" style="position: absolute;margin-left: 74%;margin-top: -8%;" href="{{ url('/modI/'.$idioma->id) }}">Editar</a>
                    </div>
                </div>
                @endforeach

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
                    <form action="{{url('datos')}}" method="GET">
                            <input type="submit" class="btn btn2 btn-primary px-1" id="add" value="Editar">
                        </form>
                    </div>
                </div>
                <hr>
                @foreach($datos as $dato)
                <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Carnet de conducir</b></h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{$dato->license}}</h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Vehículo propio</b></h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{$dato->vehicle}}</h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Nacionalidad</b></h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{$dato->nationality}}</h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Permiso de trabajo</b></h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{$dato->work_permit}}</h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light"><b> Autónomo</b></h6>
                <h6 class="card-subtitle mb-2 ms-2 text-light">{{$dato->autonomous}}</h6>
                @endforeach
            </div>
        </div>
    </li>
</ul>
@endsection