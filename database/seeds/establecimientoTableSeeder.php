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
        App\Establecimiento::truncate();
        
		App\Establecimiento::create([
			'nombre'	=> 'Estacionamiento Maipu',
			'coordenada_x'	=> '-23.649759',
			'coordenada_y'	=> '-70.398818',
			'cant_estacionamiento'	=> '20',
			'cant_disponible'	=> '20',
			'direccion'	=> 'Maipú 527, Antofagasta, Región de Antofagasta'
		]);

		
    }
}
