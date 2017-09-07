<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Código QR</title>
    
    <link type="text/css" rel="stylesheet" href="css/ghpages-materialize.css"  media="screen,projection"/>
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link href="css/prism.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.timeago.min.js"></script>
    <!--<script type="text/javascript" src="js/validacionForms.js"></script> -->
    <script>
     			  $(document).ready(function(){
       			// Activate the side menu
       			$(".button-collapse").sideNav();});
   </script>
   
  </head>
  <body>

<div id="jqueryvalidation" class="section">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="col s12 m12 l6">
        <div class="card-panel">
          <h4 class="header2">Generar QR</h4>
          <div class="row">

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
              
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>

</html>