<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifaBloqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tarifa', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('Establecimiento_id')-> unsigned();
            $table -> integer('valorHora');
            $table -> string('dia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tarifa');
    }
}
