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

		$establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento Maipu')->first();
		Estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2',
			'Establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = Establecimiento::all()->where('nombre', 'Full Lavado Estacionamiento')->first();
		Estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2',
			'Establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento 2 pro')->first();
		Estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2',
			'Establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = Establecimiento::all()->where('nombre', 'Empresa de Estacionamientos Astore')->first();
		Estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2',
			'Establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = Establecimiento::all()->where('nombre', 'ProWash Jumbo Antofagasta')->first();
		Estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2',
			'Establecimiento_id'	=> $establecimiento->id
		]);
    }
}
