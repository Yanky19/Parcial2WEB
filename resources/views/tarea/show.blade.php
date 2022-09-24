@extends('tema.app')

@section('title', 'tarea')
@section('contenido')
<h3>
     {{ $tarea->nombre }}</i>
     {{ $tarea->apellido}}</i>
     {{ $tarea->direccion }}</i>
     {{ $tarea->telefono }}</i>
</h3>
@endsection
