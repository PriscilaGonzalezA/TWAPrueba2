<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use App\Estacionamiento;
use App\Establecimiento;
use App\Tarifa;

class mapController extends Controller
{
    public function inicio(){

    //Recolecta estacionamientos

        $establecimiento = Establecimiento::all();
        $estacionamineto = Estacionamiento::all();
        $tarifa = Tarifa::all();

		Mapper::map(-31.3359916, -73.8418008,['zoom'=>15, 'locate'=>true, 'center'=> true, 'title' => 'Mi localización']);

        foreach ($establecimiento as $esta) {
            Mapper::marker($esta->coordenada_x, $esta->coordenada_y, ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP', 'title' => $esta->nombre, 'eventClick' => 'document.getElementById("infoPanel").innerHTML = "' . '<p>' . $esta->nombre .  '<br>' .
                                                                                                    $esta->nombre . '<br>' .  
                                                                                                    $esta->nombre . '<br>' .  
                                                                                                    $esta->nombre . '</p>' . '"; markerClick(); ']);
        }

        return view('inicio',compact('establecimiento','estacionamineto','tarifa'));
	}

}
