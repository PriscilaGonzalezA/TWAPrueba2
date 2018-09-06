<?php

namespace App\Presenters;

use Illuminate\Support\HtmlString;
use App\Estacionamiento;
use App\Establecimiento;
use App\Tarifa;

class EstablecimientoPresenter extends Presenter
{

    public function getEstacionamientos($establecimiento): string
    {
       $estacionamiento = Estacionamiento::where('Establecimiento_id', $establecimiento->id)->count();

       return $estacionamiento;
    }

    public function getEstaDisponibles($establecimiento): string
    {
       $estacionamiento = Estacionamiento::where('Establecimiento_id', $establecimiento->id)->where('Estado', '1')->count();

       return $estacionamiento;
    }

    public function getTarifa($establecimiento): string
    {
       $tarifa = Tarifa::where('Establecimiento_id', $establecimiento->id)->first();
       $tari = $tarifa->valorHora;

       return 1;
    }



}