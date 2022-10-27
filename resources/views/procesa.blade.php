@extends('layouts.plantilla')

@section('contenido')

        @if($nombre != 'Fede')
            <h1>Acceso denegado</h1>
        @else
            <h1>Bienvenido: {{ $nombre }}</h1>
        @endif

        <hr>

        <ul>
            @foreach($marcas as $marca)
                <li>{{ $marca }}</li>
            @endforeach
        </ul>

        @endsection