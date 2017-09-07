<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class QRController extends Controller
{
   public function generador(){
        return view("CodigoQR/QR");
   }

   public function listar(){
   		$piezas = \App\pieza::all();
   		#where('codigo_qr','like','')               
        #       ->get(['cod_pieza','nombre']);

		return view("CodigoQR/prueba")->with('piezas',$piezas);
   }
}