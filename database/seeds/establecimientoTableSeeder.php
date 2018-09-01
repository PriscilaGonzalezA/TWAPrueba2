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
			'cant_estacionamiento'	=> '20',
			'cant_disponible'	=> '20',
			'direccion'	=> 'Maipú 527, Antofagasta, Región de Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Full Lavado Estacionamiento',
			'coordenada_x'	=> '-23.656426',
			'coordenada_y'	=> '-70.400123',
			'cant_estacionamiento'	=> '25',
			'cant_disponible'	=> '25',
			'direccion'	=> 'Coquimbo 887, Antofagasta, Región de Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Estacionamiento 2 pro',
			'coordenada_x'	=> '-23.657221',
			'coordenada_y'	=> '-70.399482',
			'cant_estacionamiento'	=> '30',
			'cant_disponible'	=> '30',
			'direccion'	=> 'Coquimbo 952, Antofagasta, Región de Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'Empresa de Estacionamientos Astore',
			'coordenada_x'	=> '-23.648508',
			'coordenada_y'	=> '-70.395213',
			'cant_estacionamiento'	=> '40',
			'cant_disponible'	=> '40',
			'direccion'	=> 'Calle Sucre 656, Antofagasta, Región de Antofagasta'
		]);

		Establecimiento::create([
			'nombre'	=> 'ProWash Jumbo Antofagasta',
			'coordenada_x'	=> '-23.667432',
			'coordenada_y'	=> '-70.405077',
			'cant_estacionamiento'	=> '50',
			'cant_disponible'	=> '50',
			'direccion'	=> '1270236, Av. Angamos 745 Estacionamiento Jumbo, Antofagasta, Región de Antofagasta'
		]);
    }
}
