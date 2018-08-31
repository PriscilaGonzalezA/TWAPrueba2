<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Establecimiento', function (Blueprint $table) {
            $table->increments('id');
            $table -> string('nombre');
            $table -> integer('coordenada_x');
            $table -> integer('coordenada_y');
            $table -> integer('cant_estacionamiento');
            $table -> integer('cant_disponible');
            $table -> string('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Establecimiento');
    }
}
