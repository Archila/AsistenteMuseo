<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    
    <link type="text/css" rel="stylesheet" href="css/ghpages-materialize.css"  media="screen,projection"/>
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link href="css/prism.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.timeago.min.js"></script>
   
   
  </head>
<body>

<div id="jqueryvalidation" class="section">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="col s12 m12 l12">
        <div class="card-panel">
          <h4 class="header2">@yield('encabezado')</h4>
          @yield('contenido')          
        </div>
      </div>
    </div>
  </div>
</div>
  </body>

</html>
