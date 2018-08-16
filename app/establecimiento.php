<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class establecimiento extends Model
{
    public $timestamps = false;
    protected $table ="establecimiento";
    protected $fillable = ['id','coordenadas','cant_estacionamiento','cant_disponible','direccion'];

        public function tarifaBloque()
    {
        return $this->hasMany('App\tarifaBloque');
    }
            public function estacionamiento()
    {
        return $this->hasMany('App\estacionamiento');
    }
            public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }

}
