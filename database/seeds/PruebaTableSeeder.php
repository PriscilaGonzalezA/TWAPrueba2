<?php

use Illuminate\Database\Seeder;
use App\Prueba;

class PruebaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Prueba::truncate();

		App\Prueba::create([
			'prueba1'	=> 'Administrador',
			'prueba2'	=> 'Pruebas deportivas, usuario, discapacidad, agrupación, ayuda técnica, etc.'
		]);
    }
}
