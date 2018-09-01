@extends('layout')

@section('contenido')
    <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    <h1>Lista de estacionamientos:</h1>
    <div id="main-container">
    <table>
        <thead>
        <tr>
            <th>Nombre estacionamiento</th>
            <th>Precio por hora</th>
            <th>Direccion</th>
        </tr>
        </thead>
        @foreach($establecimiento as $es)
        <tr>
            <th>{{$es->nombre}}</th>
            @foreach($tarifa as $tari)
                @if($tari->Establecimiento_id == $es->id)
            <th>$ {{$tari->valorHora}}</th>
                @endif
            @endforeach
            <th>{{$es->direccion}}</th>
        </tr>
        @endforeach
    </table>
    </div>
@stop

