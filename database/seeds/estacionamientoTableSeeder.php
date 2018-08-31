<?php

use Illuminate\Database\Seeder;
use App\establecimiento;
use App\estacionamiento;

class estacionamientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estacionamiento::truncate();

		$establecimiento = establecimiento::all()->where('nombre', 'Estacionamiento Maipu')->first();
		estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2x2',
			'establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = establecimiento::all()->where('nombre', 'Full Lavado Estacionamiento')->first();
		estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2x2',
			'establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = establecimiento::all()->where('nombre', 'Estacionamiento 2 pro')->first();
		estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2x2',
			'establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = establecimiento::all()->where('nombre', 'Empresa de Estacionamientos Astore')->first();
		estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2x2',
			'establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = establecimiento::all()->where('nombre', 'ProWash Jumbo Antofagasta')->first();
		estacionamiento::create([
			'estado'	=> 'disponible',
			'tamanio'	=> '2x2',
			'establecimiento_id'	=> $establecimiento->id
		]);
    }
}
