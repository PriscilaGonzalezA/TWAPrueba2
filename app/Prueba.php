<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    public $timestamps = false;
	protected $table = 'Prueba';
	protected $fillable = ['prueba1', 'prueba2'];
}
