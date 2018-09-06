<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

class mapController extends Controller
{
    public function inicio(){

		Mapper::map(-31.3359916, -73.8418008,['zoom'=>15, 'locate'=>true, 'center'=> true]);
	//	$direccionesX = [-23.658243, -23.657457, -23.656631];
	//	$direccionesY = [-70.400022,  -70.399153, -70.399968];
     //	for($i = 0; $i < 3; $i++) {
	//		Mapper::marker($direccionesX[$i], $direccionesY[$i], ['symbol' => 'circle', 'scale' => 1000]);
	//	}
        Mapper::marker(-23.6777769, -70.4116944, ['eventMouseOver' => 'console.log("left click");']);
   //     Mapper::marker(-23.657202, -70.401854, ['symbol' => 'circle', 'scale' => 1000]);
		return view('welcome');
	}

}
