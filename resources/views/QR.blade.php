
  <?php

    require "phpqrcode/qrlib.php";
    $dir = 'img_qr/';

    if(!file_exists($dir)){
      mkdir($dir);              
    }

    $filename = $dir.'test.png';
    $tamanio =10;
    $level ='M';
    $framsize =3;
    $contenido = 'HOLA MUNDO';

    if(!file_exists($filename)){
      echo '<p>Nuevo código QR generado</p>';   
      qrcode::png($contenido,$filename,$level,$tamanio,$framsize);          
    }
    else {echo '<p>Imagen existente en la base de datos</p>';}

    echo '<img src="'.$filename.'" />';

    ?>
           