@extends('layouts.app')

@section('content')
<br>
<div class="container text-start w-75 mx-auto mt-5">
    <h2>Lista de candidatos a {{$ofertas->name}}</h2>
    <hr class="bg-danger">
</div>

<ul class="list-unstyled">

    @foreach($ofertas->user as $users)
    <li>

        <div class="card text-justify w-75 mx-auto mt-5 shadow">
            <div class="card-body">
                    <h4 class="card-title ms-2 mt-2">{{ $users->student()->get('student_name')[0]->student_name}} {{ $users->student()->get('student_surname')[0]->student_surname}}</h4>
                    
                    <a href="{{url('perfil/'.$users->id) }}"  class="btn2 btn btn-success"> Ver perfil</a>
                    
            </div>
        </div>

    </li>
    @endforeach
</ul>
@endsection
