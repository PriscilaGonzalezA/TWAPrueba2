<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
	protected $table = 'Usuario';
	protected $fillable = ['nickname', 'rut', 'password', 'nombre', 'ap_paterno', 'ap_materno', 'email', 'direccion', 'rol'];

	public function auto()
    {
        return $this->belongsToMany('App\Auto', 'Auto_Usuario');
    }

    public function establecimiento()
    {
        return $this->hasMany('App\establecimiento');
    }
}
