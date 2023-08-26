<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hotel Plaza</title>
      <link rel="stylesheet" href="{{asset('plantilla/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('plantilla/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('plantilla/css/fontawesome.min.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
      <div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="{{asset('plantilla/imgs/logo.jpg')}}" alt="" width="85px" height="85px" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}" style="font-family:Script MT Bold; font-weight:bold;">INICIO</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/habitaciones') }}" style="font-family:Script MT Bold; font-weight:bold;">HABITACIONES</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/galeria') }}" style="font-family:Script MT Bold; font-weight:bold;">GALERIA</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/izamal') }}" style="font-family:Script MT Bold; font-weight:bold;">IZAMAL</a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/Izamalplaza?mibextid=ZbWKwL" style="font-family:Script MT Bold; font-weight:bold;">CONTACTANOS</a>
                     </li>
                     <!--
                     @if (Route::has('login'))

                        @auth
                           <li class="nav-item">
                              <a href="{{ url('/home') }}" class="nav-link" style="font-family:Script MT Bold; font-weight:bold;">Home</a>
                           </li>
                        @else
                           <li class="nav-item">
                              <a href="{{ route('login') }}" class="nav-link" style="font-family:Script MT Bold; font-weight:bold;">LOGIN</a>
                           </li>
                              @if (Route::has('register'))
                           <li class="nav-item">
                              <a href="{{ route('register') }}" class="nav-link" style="font-family:Script MT Bold; font-weight:bold;">REGISTRARSE</a>
                           </li>
                              @endif
                        @endauth
                      -->
                     @endif
                     <!-- {{--li--}} -->
                    <!-- <li class="nav-item .search-container">
                        <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                        <form>
                           <input type="search" placeholder="Search">
                        </form>
                     </li>-->
                     <!-- {{--fin li--}} -->
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <!-- {{--contenido--}} -->
         @yield('contenido')
      <!-- {{--fin del contenido--}} -->
      <footer style="background: #F09808;" >
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="{{asset('plantilla/imgs/logo.jpg')}}" alt="" width="70px" height="70px" />
                     <p style="margin-top: 5px; text-align: justify; font-size: 100%; font-family:Homer Simpson UI;" >Somos un hotel  que te ofrece comodidad y descanso en donde cada despertar es un mágico sueño.</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item" style="color:">
                     <h4 class="text-uppercase" style=" color:black">Navegación</h4>
                     <ul>
                        <li style="margin-top: 5px; text-align: justify; font-size: 100%; font-family:Homer Simpson UI;" ><a href="{{url('/')}}">Inicio</a></li>
                        <li style="margin-top: 5px; text-align: justify; font-size: 100%; font-family:Homer Simpson UI;" ><a href="{{ url('/habitaciones') }}">Habitaciones</a></li>
                        <li style="margin-top: 5px; text-align: justify; font-size: 100%; font-family:Homer Simpson UI;" ><a href="{{ url('/galeria') }}">Galeria</a></li>
                        <li style="margin-top: 5px; text-align: justify; font-size: 100%; font-family:Homer Simpson UI;" ><a href="{{ url('/izamal') }}">Izamal</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase" style=" color:black">Contacto</h4>
                     <p><strong>Ubicación:</strong></p>
                     <p style="margin-top: 5px; text-align: justify; font-size: 100%; font-family:Homer Simpson UI;" ><img src="{{asset('plantilla/imgs/ubicacion.png')}}" alt="#" width="30px" height="30px" /> Calle 28, No. 299, Izamal, Yucatán, Mexico</p>
                     <p style="margin-top: 5px; text-align: justify; font-size: 100%; font-family:Homer Simpson UI;" ><strong>Teléfono:</strong></p>
                     <p style="margin-top: 5px; text-align: justify; font-size: 100%; font-family:Homer Simpson UI;" ><img src="{{asset('plantilla/imgs/phone_icon.png')}}" alt="#"  /> 988 954 0630</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase" style=" color:black">Conocenos</h4>
                     <ul>
                        <li><img src="{{asset('plantilla/imgs/facebook.png')}}" width="30px" height="30px"/> <a href="https://www.facebook.com/Izamalplaza/">Facebook</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">
            <p>Copyright 2022  Made by <a href="https://html.design"> J.B.M.H</a></p>
         </div>
      </footer>
      <script src="{{asset('plantilla/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('plantilla/js/bootstrap.min.js')}}"></script>

   </body>
</html>
