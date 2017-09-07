@extends('CodigoQR.base')

@section('titulo','Listado')

@section('encabezado','Listado de Piezas')

@section('contenido')
<div class="row"> 

<form>
  <div class="input-field col s10">      

    <div class="input-field col s10 l10">    
    <select class="icons">
      <option value="" disabled selected>Seleccione una Pieza</option>      
      @foreach ($piezas as $p)
        @if (is_null($p->codigo_qr))
          <option value="{{$p->cod_pieza}}" data-icon="img_piezas/ferrocarril.jpg" class="circle">{{ $p->nombre }}</option>      
        @endif    
      @endforeach
    </select>
    <label>Listado de piezas</label>
    </div>
 
  </div>
</form>
</div>
</br>
<label>Browser Select</label>
  <select class="browser-default">
    <option value="" disabled selected>Choose your option</option>
    <option value="1">Option 1</option>
    @foreach ($piezas as $p)
      @if (is_null($p->codigo_qr))
        <option value="" >{{ $p->nombre }}</option>      
        
      @endif    
    @endforeach
    
  </select>
 

   
</div>
@endsection