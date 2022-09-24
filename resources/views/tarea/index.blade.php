@extends('tema.app')
@section('title', 'Listado de tareas')
@section('contenido')
<h3>
    Ingreso de datos
</h3>
<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>apellido </th>
            <th>direccion</th>
            <th>telefono</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tareas as $tarea)
        <tr>
            <td> {{ $tarea->nombre }}</td>
            <td> {{ $tarea->apellido }}</td>
            <td> {{ $tarea->direccion }}</td>
            <td> {{ $tarea->telefono }}</td>
            <td> </td>
            <td>
                <a href="{{ route('tarea.edit', $tarea) }}">Editar</a>
                <a href="{{ route('tarea.show', $tarea) }}">Ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
