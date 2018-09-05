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
			'nombre'	=> 'Estacionamiento Maipu',
			'coordenada_x'	=> '-23.649759',
			'coordenada_y'	=> '-70.398818',
			'direccion'	=> 'Maipú 527, Antofagasta, Región de Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Full Lavado Estacionamiento',
			'coordenada_x'	=> '-23.656426',
			'coordenada_y'	=> '-70.400123',
			'direccion'	=> 'Coquimbo 887, Antofagasta, Región de Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Estacionamiento 2 pro',
			'coordenada_x'	=> '-23.657221',
			'coordenada_y'	=> '-70.399482',
			'direccion'	=> 'Coquimbo 952, Antofagasta, Región de Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Empresa de Estacionamientos Astore',
			'coordenada_x'	=> '-23.648508',
			'coordenada_y'	=> '-70.395213',
			'direccion'	=> 'Calle Sucre 656, Antofagasta, Región de Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'ProWash Jumbo Antofagasta',
			'coordenada_x'	=> '-23.667432',
			'coordenada_y'	=> '-70.405077',
			'direccion'	=> '1270236, Av. Angamos 745 Estacionamiento Jumbo, Antofagasta, Región de Antofagasta'
		]);
    }
}
