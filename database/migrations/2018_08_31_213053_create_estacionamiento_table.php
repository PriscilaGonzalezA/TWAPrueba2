<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstacionamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estacionamiento', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('Establecimiento_id')-> unsigned();
            $table-> boolean('estado');
            $table -> integer('tamanio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Estacionamiento');
    }
}
