@extends('base')

@section('titulo','Prueba')

@section('encabezado','Vista de pruebas y anotaciones')

@section('contenido')
{{-- Este es un comentario --}}
<p>Variable declarada: {{$nombre}}</p>
<p>Variable declarada como null {{$edad or 22 }}</p>

{{--Uso de componentes, llama a una vista, y puede enviar parametros--}}
	@component('alerta',['id' => 'hola_mundo'])
	    @slot('titulo')
	        Forbidden
	    @endslot
	    You are not allowed to access this resource!   
	@endcomponent

	@php
	$e =15;
	echo '<p>Trabajo com php</p>';
	$e = $e +10;
	echo $e;
	$cod_pieza='test';
	@endphp
@include('QR')

{{--Para que la accion funcione, se debe de añadir la ruta--}}
<a href="{{ action('PruebasController@prueba2') }}">¡Aprieta aquí!</a>

@endsection 

@stack('scripts')
