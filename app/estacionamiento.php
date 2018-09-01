<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacionamiento extends Model
{
    public $timestamps = false;
    protected $table = 'Estacionamiento';
    protected $fillable = ['estado','tamanio','Establecimiento_id'];

    public function establecimiento()
    {
        return $this->belongsTo('App\Establecimiento','Establecimiento_id');
    }
    
}
