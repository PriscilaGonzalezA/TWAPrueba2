<?php

use Illuminate\Database\Seeder;
use App\Establecimiento;
use App\Estacionamiento;

class estacionamientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estacionamiento::truncate();

        $establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento Copec')->first();
        Estacionamiento::create([
            'estado'	=> '1',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);
        $establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento Copec')->first();
        Estacionamiento::create([
            'estado'	=> '1',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);
        $establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento Copec')->first();
        Estacionamiento::create([
            'estado'	=> '0',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);

        $establecimiento = Establecimiento::all()->where('nombre', 'Full Estacionamiento Previa')->first();
        Estacionamiento::create([
            'estado'	=> '0',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);
        $establecimiento = Establecimiento::all()->where('nombre', 'Full Estacionamiento Previa')->first();
        Estacionamiento::create([
            'estado'	=> '0',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);

		$establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento Huanchaca')->first();
		Estacionamiento::create([
			'estado'	=> '1',
			'tamanio'	=> '2',
			'Establecimiento_id'	=> $establecimiento->id
		]);

        $establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento Huanchaca')->first();
        Estacionamiento::create([
            'estado'	=> '1',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);

        $establecimiento = Establecimiento::all()->where('nombre', 'Estacionamientos Antofagasta')->first();
        Estacionamiento::create([
            'estado'	=> '1',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);
        $establecimiento = Establecimiento::all()->where('nombre', 'Estacionamientos Antofagasta')->first();
        Estacionamiento::create([
            'estado'	=> '0',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);
        $establecimiento = Establecimiento::all()->where('nombre', 'Estacionamientos Antofagasta')->first();
        Estacionamiento::create([
            'estado'	=> '0',
            'tamanio'	=> '2',
            'Establecimiento_id'	=> $establecimiento->id
        ]);

        $establecimiento = Establecimiento::all()->where('nombre', 'El Torito Bravo')->first();
		Estacionamiento::create([
			'estado'	=> '0',
			'tamanio'	=> '2',
			'Establecimiento_id'	=> $establecimiento->id
		]);
    }
}
