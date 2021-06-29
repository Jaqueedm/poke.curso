<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@extends('layouts.plantilla')

@section('title','Pokédex')

@section('content')
<h1>Bienvenido a la pokédex</h1>
<a href="{{route('cursos.create')}}" class="btn btn-outline-primary">Registar un nuevo pogo</a>

<ul>
    @foreach ($cursos as $curso)
        <div class="container">
            <div class="row">
         
                <div class="pinWrapper">
                    <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
                    <p class="card-text">{{$curso->descripcion}}</p> 
                </div>
        
            </div>
        </div>
        <br>
        
    @endforeach
</ul>

{{$cursos->links()}} 

@endsection