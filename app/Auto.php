<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
        public $timestamps = false;
	protected $table = 'Auto';
	protected $fillable = ['patente', 'color', 'marca', 'modelo', 'tamano'];

	public function usuario()
    {
        return $this->belongsToMany('App\Usuario', 'Auto_Usuario');
    }

    public function estacionamiento()
    {
        return $this->belongsTo('App\Estacionamiento');
    }
}
