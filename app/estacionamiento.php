<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacionamiento extends Model
{
    public $timestamps = false;
    protected $table = 'Estacionamiento';
    protected $fillable = ['Establecimiento_id','estado','tamanio'];

    public function establecimiento()
    {
        return $this->belongsTo('App\Establecimiento','Establecimiento_id');
    }
    
}
