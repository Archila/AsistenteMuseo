@extends('CodigoQR.base')

@section('titulo','QR')

@section('encabezado','Generador de QR')

@section('contenido')
<div class="row">

<?php

  require "phpqrcode/qrlib.php";
  $dir = 'img_qr/';

  if(!file_exists($dir)){
    mkdir($dir);              
  }

  $filename = $dir.'test.png';
  $tamanio =10;
  $level ='H';
  $framsize =3;
  $contenido = 'XBXIMG001';

  if(!file_exists($filename)){
    echo '<p>Nuevo código QR generado</p>';   
    qrcode::png($contenido,$filename,$level,$tamanio,$framsize);          
  }
  else {echo '<p>Imagen existente en la base de datos</p>';}

  echo '<img src="'.$filename.'" />';

  ?>    
</div>
@endsection
       