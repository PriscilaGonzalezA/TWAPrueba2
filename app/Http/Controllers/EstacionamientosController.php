<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estacionamiento;
use App\Establecimiento;
use App\Tarifa;

class EstacionamientosController extends Controller
{
    //Recolecta estacionamientos
    public function inicio(){
        $establecimiento = Establecimiento::all();
        $estacionamineto = Estacionamiento::all();
        $tarifa = Tarifa::all();

        return view('inicio',compact('establecimiento','estacionamineto','tarifa'));
    }

    //Funcion que devuelve los dato
    public function inicio(){
        $establecimiento = Establecimiento::all();
        $estacionamineto = Estacionamiento::all();
        $tarifa = Tarifa::all();

        return view('inicio',compact('establecimiento','estacionamineto','tarifa'));
    }
}
