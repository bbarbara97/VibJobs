@extends('layouts.app')

@section('content')
<div class="container text-start w-75 mx-auto mt-5">
    <h2>CV {{ $user->student()->get('student_name')[0]->student_name  }}</h2>
    <hr class="bg-danger">
</div>




<ul class="list-unstyled">
<li>

<div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">
                <div class="row" id="r2">
                    <div class="col-9">
                        <h4 class="card-title ms-5 mt-2">Datos personales</h4>
                    </div>
                </div>
                <hr>
                <h4 class="card-subtitle mb-2 ms-5 text-dark"><b>{{ $user->student()->get('student_name')[0]->student_name  }} {{ $user->student()->get('student_surname')[0]->student_surname  }}</b></h4>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{ $user->student()->get('DNI')[0]->DNI  }}</h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{ $user->location}}({{ $user->country}}), {{ $user->cp}}</h6> <br>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{ $user->email}}</h6> <br>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{ $user->student()->get('course')[0]->course  }}</h6>
                <img src="../img/yo.jpg" width="100px" height="100px" class="rounded-circle abs">

            </div>
        </div>

</li>
    <li>
        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">
                <div class="row" id="r2">
                    <div class="col-9">
                        <h4 class="card-title ms-5 mt-2">Experiencia</h4>
                    </div>
                    
                </div>
                <hr>
                @foreach($exp as $experiencia)
                <div class="row" id="row">
                    <div class="col-9 mb-2">
                        
                            <h5 class="card-subtitle mb-2 ms-5 text-dark"><b> {{ $experiencia->name}}</b></h5>
                            <h6 class="card-subtitle mb-2 ms-5 text-light"><b>Empresa: </b>{{ $experiencia->business}}</h6>
                            <h6 class="card-subtitle mb-2 ms-5 text-light"><b>Tiempo trabajado: </b>{{ $experiencia->time}}</h6>
                            <p class="card-subtitle mb-2 ms-5 fst-italic text-light"><b>Descripción: </b> {{$experiencia->description}}</p>
                           
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </li>
    <li>
        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">

                <div class="row" id="r2">
                    <div class="col-9">
                        <h4 class="card-title ms-5 mt-2">Estudios</h4>
                    </div>
                    
                </div>
                <hr>
                @foreach($estudios as $estudio)
                <div class="row" id="row">
                    <div class="col-9 mb-2">
                       
                            <h5 class="card-subtitle mb-2 ms-5 text-dark"><b>{{$estudio->name}}</b>
                            </h5>
                            <h6 class="card-subtitle mb-2 ms-5 text-light"><b>Centro: </b>{{$estudio->institute}}</h6>
                            <h6 class="card-subtitle mb-2 ms-5 text-light"><b>Tiempo estado:</b>{{$estudio->time}}</h6>
                            
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </li>
    <li>
        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">
                <div class="row" id="r2">
                    <div class="col-9">
                        <h4 class="card-title ms-5 mt-2">Idiomas</h4>
                    </div>
                    
                </div>
                <hr>
                @foreach($idiomas as $idioma)
                <div class="row pt-2 mb-2" id="row">
                    
                    <div class="col-3">
                        <h6 class="card-subtitle mb-2 ms-5 text-light"><b>Idioma:</b>{{$idioma->name}}</h6>

                        <h6 class="card-subtitle mb-2 ms-5 text-light"><b>Nivel: </b>{{$idioma->level}}</h6>
                    </div>
                    
                    
                </div>
                @endforeach

            </div>
        </div>
    </li>
    <li>
        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">
                <div class="row" id="r2">
                    <div class="col-9">
                        <h4 class="card-title ms-5 mt-2">Otros datos</h4>
                    </div>
                    
                </div>
                <hr>
                @foreach($datos as $dato)
               
                <h6 class="card-subtitle mb-2 ms-5 text-light"><b> Carnet de conducir</b></h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{$dato->license}}</h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light"><b> Vehículo propio</b></h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{$dato->vehicle}}</h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light"><b> Nacionalidad</b></h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{$dato->nationality}}</h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light"><b> Permiso de trabajo</b></h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{$dato->work_permit}}</h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light"><b> Autónomo</b></h6>
                <h6 class="card-subtitle mb-2 ms-5 text-light">{{$dato->autonomous}}</h6>
                
                @endforeach
            </div>
        </div>
    </li>
</ul>
@endsection