<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    public $timestamps = false;
    protected $table = 'Tarifa';
    protected $fillable = ['valorHora','dia','Establecimiento_id'];

    public function establecimiento()
    {
        return $this->belongsTo('App\Establecimiento','Establecimiento_id');
    }
}
