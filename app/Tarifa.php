<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    public $timestamps = false;
    protected $table = 'Tarifa';
    protected $fillable = ['Establecimiento_id','valorHora','dia'];

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }
}
