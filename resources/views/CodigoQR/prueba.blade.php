@extends('CodigoQR.base')

@section('titulo','Listado')

@section('encabezado','Listado de Piezas')

@section('contenido')
<div class="row"> 
<div class=" col s12 m12 l6">
  <form>
    <div class="input-field col s10">      

      <div class="input-field">    
      <select class="icons">
        <option value="" disabled selected>Seleccione una Pieza</option>      
        @foreach ($piezas as $p)
          @if (is_null($p->codigo_qr))
            @if(!is_null($p->fotografia))
              <option value="{{$p->cod_pieza}}" data-icon="{{$p->fotografia}}" class="circle">{{ $p->nombre }}</option>           
            @else
            <option value="{{$p->cod_pieza}}" data-icon="img_piezas/ferrocarril.jpg" class="circle">{{ $p->nombre }}</option>
            @endif          
          @endif    
        @endforeach
      </select>
      
      <label>Listado de piezas</label>
      </div>

    </div>
  </form>
</div>

</div>

 

   
</div>
@endsection