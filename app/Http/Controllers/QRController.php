<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QRController extends Controller
{
      
   public function listar(){
   	$piezas = \App\pieza::all(); 	

		#return view("QR.listar_piezas")->with('piezas',$piezas);
      return view("QR.listar_piezas")->with('piezas',$piezas);
   }

   public function guardarQR(Request $request){
   		$cod_pieza = $request->input('cod_pieza');
   		$file = $request->input('file');
   		$pieza=\App\pieza::find($cod_pieza);
   		$pieza->codigo_qr =$file;
   		$pieza->save();
   		return redirect()->action('QRController@generarQR', ['$cod_pieza'=>$cod_pieza]);
   }  

   public function generarQR(Request $request){
         $cod_pieza = $request->input('cod_pieza');         
         return view('QR.generarQR')->with('cod_pieza',$cod_pieza);
   }  

   public function ficha($id){
      $cod_pieza = $id;
      $pieza=\App\pieza::find($cod_pieza);
      $ficha =\App\fichas_informativa::where('pieza', $id)->first();
      return view('ficha')->with(['pieza'=>$pieza, 'ficha'=>$ficha]);
   }
   
}
