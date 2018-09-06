<?php

use Illuminate\Database\Seeder;
use App\establecimiento;
use App\Tarifa;


class tarifaBloqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarifa::truncate();

		$establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento Copec')->first();
		Tarifa::create([
			'valorHora'	=> '500',
			'dia'	=> 'todos los dias',
			'Establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = Establecimiento::all()->where('nombre', 'Full Estacionamiento Previa')->first();
		Tarifa::create([
			'valorHora'	=> '800',
			'dia'	=> 'todos los dias',
			'Establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = Establecimiento::all()->where('nombre', 'Estacionamiento Huanchaca')->first();
		Tarifa::create([
			'valorHora'	=> '1000',
			'dia'	=> 'todos los dias',
			'Establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = Establecimiento::all()->where('nombre', 'Estacionamientos Antofagasta')->first();
		Tarifa::create([
			'valorHora'	=> '1100',
			'dia'	=> 'todos los dias',
			'Establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = Establecimiento::all()->where('nombre', 'El Torito Bravo')->first();
		Tarifa::create([
			'valorHora'	=> '1200',
			'dia'	=> 'todos los dias',
			'Establecimiento_id'	=> $establecimiento->id
		]);
    }
}
