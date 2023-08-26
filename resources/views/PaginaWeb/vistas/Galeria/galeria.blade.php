@extends('PaginaWeb.layout.index')
@section('contenido')
  <div class="col-md-">
     <h3 class="black_font" style="text-transform: none !important; font-family:Monotype Corsiva" >HABITACIONES</h3>
  </div>
 
</div>
<div class="galerias">
  <div class="box">
    <img src="{{asset('Storage'.'/'.$habitacion4->imagen)}}">
    <span>{{$habitacion4->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$habitacion5->imagen)}}">
    <span>{{$habitacion5->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$habitacion6->imagen)}}">
    <span>{{$habitacion6->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$habitacion1->imagen)}}">
    <span>{{$habitacion1->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$habitacion2->imagen)}}">
    <span>{{$habitacion2->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$habitacion3->imagen)}}">
    <span>{{$habitacion3->descripcion}}</span>
  </div>
</div>



  <div class="col-md-10">
     <h3 class="black_font" style="text-transform: none !important; font-family:Monotype Corsiva" >BAÑOS</h3>
  </div>
<div class="galerias">
  <div class="box">
    <img src="{{asset('Storage'.'/'.$banio4->imagen)}}">
    <span>{{$banio4->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$banio5->imagen)}}">
    <span>{{$banio5->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$banio6->imagen)}}">
    <span>{{$banio6->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$banio1->imagen)}}">
    <span>{{$banio1->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$banio2->imagen)}}">
    <span>{{$banio2->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$banio3->imagen)}}">
    <span>{{$banio3->descripcion}}</span>
  </div>
</div>

  <div class="col-md-10">
     <h3 class="black_font" style="text-transform: none !important; font-family:Monotype Corsiva" >SERVICIOS</h3>
  </div>
 
<div class="galerias">
  <div class="box">
    <img src="{{asset('Storage'.'/'.$piscina->imagen)}}">
    <span>{{$piscina->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$servidor1->imagen)}}">
    <span>{{$servidor1->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$servidor->imagen)}}">
    <span>{{$servidor->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$terraza->imagen)}}">
    <span>{{$terraza->descripcion}}</span>
  </div>
  <div class="box">
    <img src="{{asset('Storage'.'/'.$terraza1->imagen)}}">
    <span>{{$terraza1->descripcion}}</span>
  </div>
</div>
@endsection 