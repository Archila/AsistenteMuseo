<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function prueba (Request $request){
   		$nom = "Ivan";
   		$e = null;
   		return view("prueba")->with(array('nombre'=>$nom,
   											'edad' =>$e));
   }

   public function prueba2 (){
   		#Como parametro se envia la ruta, no la vista
   		return redirect('t');
   }
}
