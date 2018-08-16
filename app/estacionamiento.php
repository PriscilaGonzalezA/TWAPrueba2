<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estacionamiento extends Model
{
    public $timestamps = false;
    protected $table ="estacionamiento";
    protected $fillable = ['id','estado','tamanio'];

    public function estacionamiento()
    {
        return $this->hasOne('App\Auto');
    }
            public function establecimiento()
    {
        return $this->belongsTo('App\establecimiento');
    }
}
