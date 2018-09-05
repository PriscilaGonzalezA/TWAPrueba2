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
            $table -> double('coordenada_x');
            $table -> double('coordenada_y');
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
