@extends('layout')

@section('contenido')

    <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    <div style="width:80%; height: 500px; margin: 0 auto;">
        <div style="width:70%; float:left;">
        {!! Mapper::render() !!}
        </div>
        <div style="width:30%; float:left;">
            <br>
            <div id="infoPanel" style="border-radius: 10px; border: 0px solid; margin-left: 30px; background-color: white; text-align:center;">
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <br>
    <div id="main-container">
    <h1>Lista de estacionamientos:</h1>
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

