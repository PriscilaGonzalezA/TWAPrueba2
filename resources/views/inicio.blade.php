@extends('layout')

@section('contenido')

    <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    <div style="width: 600px; height: 500px;">
        {!! Mapper::render() !!}
    </div>
    <h1>Lista de estacionamientos:</h1>
    <div id="main-container">
    <table>
        <thead>
        <tr>
            <th>Nombre estacionamiento</th>
            <th>Precio por hora</th>
            <th>Direccion</th>
            <th>Estacionamientos</th>
            <th>Est. Disponibles</th>
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
            <th>{{ $es->presenter()->getEstacionamientos($es) }}</th>
            <th>{{ $es->presenter()->getEstaDisponibles($es) }}</th>
        </tr>
        @endforeach
    </table>
    </div>
@stop

