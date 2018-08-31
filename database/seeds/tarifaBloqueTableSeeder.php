<?php

use Illuminate\Database\Seeder;
use App\establecimiento;
use App\tarifaBloque;


class tarifaBloqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tarifaBloque::truncate();

		$establecimiento = establecimiento::all()->where('nombre', 'Estacionamiento Maipu')->first();
		tarifabloque::create([
			'valorHora'	=> '500',
			'dia'	=> 'todos los dias',
			'establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = establecimiento::all()->where('nombre', 'Full Lavado Estacionamiento')->first();
		tarifaBloque::create([
			'valorHora'	=> '800',
			'dia'	=> 'todos los dias',
			'establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = establecimiento::all()->where('nombre', 'Estacionamiento 2 pro')->first();
		tarifaBloque::create([
			'valorHora'	=> '1000',
			'dia'	=> 'todos los dias',
			'establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = establecimiento::all()->where('nombre', 'Empresa de Estacionamientos Astore')->first();
		tarifaBloque::create([
			'valorHora'	=> '1100',
			'dia'	=> 'todos los dias',
			'establecimiento_id'	=> $establecimiento->id
		]);

		$establecimiento = establecimiento::all()->where('nombre', 'ProWash Jumbo Antofagasta')->first();
		tarifaBloque::create([
			'valorHora'	=> '1200',
			'dia'	=> 'todos los dias',
			'establecimiento_id'	=> $establecimiento->id
		]);
    }
}
