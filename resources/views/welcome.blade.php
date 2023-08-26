@extends('PaginaWeb.layout.index')
@section('contenido')
<div id="home" class="slider">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               @if($imagenprincipal)
               <div class="carousel-item active"  style=" width:100%; height:10% ">
                  <img class="d-block w-100" src="{{asset('Storage'.'/'.$imagenprincipal->imagen)}}" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>{{$imagenprincipal->titulo}}</h2>
                     <p style="text-align: justify; font-size: 130%; font-family:Homer Simpson UI;">{{$imagenprincipal->descripcion}}</p>
                  </div>
               </div>
               @else
                  <p>sin imagen</p>
               @endif
               @foreach($imagenes as $imagen)
               <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('Storage'.'/'.$imagen->imagen)}}" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>{{$imagen->titulo}}</h2>
                     <p style="text-align: justify; font-size: 130%; font-family:Homer Simpson UI;">{{$imagen->descripcion}}</p>
                       <!--<a class="blue_bt" href="#">See Our Service</a> -->
                  </div>
               </div>
               @endforeach
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <img src="{{asset('plantilla/imgs/left.png')}}" alt="#" />
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <img src="{{asset('plantilla/imgs/right.png')}}" alt="#" />
            </a>
         </div>
      </div>
      <div id="about" class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <h4 style="font-family:Forte font">Hotel Plaza Izamal</h4>
                  <h3 style="text-transform: none !important; font-family:Monotype Corsiva" >{{$somos->titulo}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI;">{{$somos->biografia}}</p>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <img  src="{{asset('Storage'.'/'.$somos->imagen)}}" alt="60%" width="70%" height="80%"/>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--google mapa -->
      <div id="hiw" class="hiw_section layout_padding" style="background: #000000;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="white_font">UBICACIÓN</h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1374.5101535060878!2d-89.0183941047735!3d20.93398050911643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56a505d018990b%3A0xcc9855be2dd236d!2sHotel%20Izamal%20Plaza!5e0!3m2!1ses-419!2smx!4v1670017138973!5m2!1ses-419!2smx" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
               <div class="col-md-5">
               </div>
            </div>
         </div>
      </div>
    @endsection
