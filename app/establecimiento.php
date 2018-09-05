<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\EstablecimientoPresenter;

class Establecimiento extends Model
{
    public $timestamps = false;
    protected $table = 'Establecimiento';
    protected $fillable = ['nombre','coordenada_x','coordenada_y','cant_estacionamiento','cant_disponible','direccion'];

        public function tarifa()
    {
        return $this->hasMany('App\Tarifa','Establecimiento_id');
    }
            public function estacionamiento()
    {
        return $this->hasMany('App\Estacionamiento','Establecimiento_id');
    }

    public function presenter()
    {
        return new EstablecimientoPresenter($this);
    }
}
