@extends('base')

@section('titulo','Ficha')

@section('encabezado','Ficha Informativa')

@section('contenido')
<div class="container">
	<div class="row "> 
		<div class=" col s12 m6 l6 xl6">
		  <form action="{{action('QRController@generarQR')}}" method="POST">	  
		    
		  </form>
		  <h4 class="center-align">{{$pieza->nombre}}</h4>
		   <img class="responsive-img circle z-depth-4" src='/{{$pieza->fotografia}}'>
		  <h5 class="center-align">{{$ficha->historia}}</h5>
		</div>
	</div>   
</div>

@endsection 
