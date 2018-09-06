<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\EstablecimientoPresenter;

class Establecimiento extends Model
{
    public $timestamps = false;
    protected $table = 'Establecimiento';
    protected $fillable = ['nombre','coordenada_x','coordenada_y','direccion'];

    public function tarifa()
    {
        return $this->hasMany(Tarifa::class,'Establecimiento_id');
    }
    
    public function estacionamiento()
    {
        return $this->hasMany(Estacionamiento::class,'Establecimiento_id');
    }

    public function presenter()
    {
        return new EstablecimientoPresenter($this);
    }
}
