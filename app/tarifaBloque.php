<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarifaBloque extends Model
{
	public $timestamps = false;
    protected $table ="tarifaBloque";
    protected $fillable = ['id','valor','dia','hora_inicio','hora_termino'];

        public function establecimiento()
    {
        return $this->belongsTo('App\establecimiento');
    }

}
