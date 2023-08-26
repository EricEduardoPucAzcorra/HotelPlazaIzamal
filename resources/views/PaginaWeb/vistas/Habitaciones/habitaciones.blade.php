@extends('PaginaWeb.layout.index')
@section('contenido')
<div id="hiw" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="black_font" style="text-transform: none !important; font-family:Monotype Corsiva" >HABITACIONES</h3>
                  <p class="blck_font" style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI;">{{$presenabitacion->descripcion}}</p>
               </div>
               <div class="col-md-">
               </div>
            </div>
            <div class="row">
               <div class="col-md-6"  style="padding-bottom: 20px; margin-bottom:20px">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$habitacion1->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808; font-family:Monotype Corsiva">{{$habitacion1->tipo_habitacion}}</h3>
                     <p style="font-family:arial; font-weight:bold;">{{$habitacion1->descripcion}}</p>
                     <p style="font-family:arial; font-weight:bold;">Efectivo:${{$habitacion1->precio_efectivo}} **** Tarjeta:${{$habitacion1->precio_targeta}}</p>
                     <a class="blue_bt" href="https://www.booking.com/hotel/mx/izamal-plaza.es.html" style="background:#F09808; font-family:arial; font-weight:bold;">Reservar</a>
               </div>
               <div class="col-md-6"  style="padding-bottom: 20px; margin-bottom:10px">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$habitacion2->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808; font-family:Monotype Corsiva" >{{$habitacion2->tipo_habitacion}}</h3>
                     <p style="font-family:arial; font-weight:bold;">{{$habitacion2->descripcion}}</p>
                     <p style="font-family:arial; font-weight:bold;">Efectivo:${{$habitacion2->precio_efectivo}} **** Tarjeta:${{$habitacion2->precio_targeta}}</p>
                     <a class="blue_bt" href="https://www.booking.com/hotel/mx/izamal-plaza.es.html" style="background:#F09808; font-family:arial; font-weight:bold;">Reservar</a>
               </div>
            </div>
        </div>
</div>
<div id="service" class="hiw_section layout_padding">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 style="text-transform: none !important; font-family:Monotype Corsiva" >Servicios</h3>
            <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI">{{$habitacion2->servicios}}</p>
        </div>
        <div class="col-md-5">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 service_blog">
            <img class="margin_top_30 img-responsive" src="{{asset('plantilla/imgs/Piscina.jpg')}}" alt="#" />
            <h3 class="blog_head" style="background:#F09808; font-family:FScript MT Bold;">Piscina</h3>
        </div>
        <div class="col-md-3 service_blog">
            <img class="margin_top_30 img-responsive" src="{{asset('plantilla/imgs/Espacio.jpg')}}" alt="#" />
            <h3 class="blog_head" style="background:#F09808; font-family:FScript MT Bold;">Sala de Star</h3>
        </div>
        <div class="col-md-3 service_blog">
            <img class="margin_top_30 img-responsive" src="{{asset('plantilla/imgs/comedor.jpg')}}" alt="#" />
            <h3 class="blog_head" style="background:#F09808; font-family:FScript MT Bold;">Terraza</h3>
        </div>
        <div class="col-md-3 service_blog">
            <img class="margin_top_30 img-responsive" src="{{asset('plantilla/imgs/Toallas.jpg')}}" alt="#" />
            <h3 class="blog_head" style="background:#F09808; font-family:FScript MT Bold;">Amenidades</h3>
        </div>
    </div>
    </div>
</div>
<!--<div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
    <div class="container">
    <div class="row">
        <div class="col-md-7">
            <h3>Reserva desde Aqui</h3>
        </div>
        <div class="col-md-5">
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="contact-form"   style="background: #F09808;" >
                <form>
                <input type="text" placeholder="Nombre" />
                <input type="email" placeholder="Email" />
                <input type="text" placeholder="Telefono" />
                <input type="text" placeholder="Tipo de habitacion">
                <input type="text" placeholder="Fecha de reservacion">
               <textarea placeholder="Message"></textarea> 
                <input type="submit" value="Reservar">
                </form>
            </div>
        </div>
    </div>
    </div>
</div> -->
@endsection 