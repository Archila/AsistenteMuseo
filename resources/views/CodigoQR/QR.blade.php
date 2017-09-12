@extends('CodigoQR.base')

@section('titulo','QR')

@section('encabezado','Generador de QR')

@section('contenido')
<div class="row">
  <?php
    require "phpqrcode/qrlib.php";

    $dir = 'imgpiezas/imgqr/';
    if(!file_exists($dir)){
      mkdir($dir);              
    }
    $filename = $dir.$cod_pieza.'.png';
    $tamanio =10;
    $level ='H';
    $framsize =3;
    $contenido = $cod_pieza;  
    if(!file_exists($filename)){
    echo '<p>Nuevo código QR generado</p>';   
    qrcode::png($contenido,$filename,$level,$tamanio,$framsize);          
    }
    else { echo "<p>Imagen existente en la base de datos</p>";}

    #redirect()->action('QRController@prueba');
    
    #redirect()->action('QRController@guardarQR', [ 'cod_pieza'=>$cod_pieza, 'file'=>$filename])->withInput();
  ?>      
  
  <p>{{$filename}}</p>

  <img src="{{$filename}}"/>


</div>
@endsection
       