<?php

use Illuminate\Database\Seeder;
use App\Establecimiento;

class establecimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establecimiento::truncate();
        
		Establecimiento::create([
			'nombre'	=> 'Estacionamiento Copec',
			'coordenada_x'	=> '-23.6788069',
			'coordenada_y'	=> '-70.4079617',
			'direccion'	=> 'Av. Angamos 0633, Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Full Estacionamiento Previa',
			'coordenada_x'	=> '-23.6768441',
			'coordenada_y'	=> '-70.400123',
			'direccion'	=> 'Av. angamos 0310, Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Estacionamiento Huanchaca',
			'coordenada_x'	=> '-23.6863467',
			'coordenada_y'	=> '-70.4126742',
			'direccion'	=> 'Av. Angamos 01606, Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Estacionamientos Antofagasta',
			'coordenada_x'	=> '-23.678268',
			'coordenada_y'	=> '-70.4034291',
			'direccion'	=> 'Osvaldo Silva Castellón 115, Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'El Torito Bravo',
			'coordenada_x'	=> '-23.678483',
			'coordenada_y'	=> '-70.4112329',
			'direccion'	=> 'Av. República de Croacia 0556, Antofagasta'
		]);
    }
}
