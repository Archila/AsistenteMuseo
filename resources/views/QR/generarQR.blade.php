@extends('base')

@section('titulo','QR')

@section('encabezado','Código QR generado')

<?php
	require "phpqrcode/qrlib.php";
	$dir = 'imgpiezas/imgqr/';

	if(!file_exists($dir)){
	  mkdir($dir);              
	}

	$filename = $dir.$cod_pieza.'.png';
	$tamanio =14;
	$level ='H';
	$framsize =1;
	$contenido = $cod_pieza;

	if(!file_exists($filename)){  
	  qrcode::png($contenido,$filename,$level,$tamanio,$framsize);          
	}
	$pieza=\App\pieza::find($cod_pieza);
	$nombre = $pieza->nombre;
	$pieza->codigo_qr =$filename;
	$pieza->save();
?>
@section('contenido')
<div class="row l6">
<div class=" col s12 m12 l6">
	<form >
  		<h4>Nueva imagen generada</h4>
	<img src="/{{$filename}}"/>
	</br>
	<div class="col s6 m6 l3">
	<p >{{$nombre}}</p>
	</div>
  </form>
	
</div>
</div>
@endsection 

