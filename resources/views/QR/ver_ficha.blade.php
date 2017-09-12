@extends('QR.base')

@section('titulo','Ficha')

@section('encabezado','Ficha informativa')

@section('contenido')

<div class="row "> 
	<div class=" col s12 m12 l12 ">
	  <form action="{{action('QRController@generarQR')}}" method="POST">
  <h4>El id es: {{$cod_pieza}}</h4>
  </form>
	</div>
</div>   

@endsection 

