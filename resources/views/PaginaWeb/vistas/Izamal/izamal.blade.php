@extends('PaginaWeb.layout.index')
@section('contenido')
<div id="hiw" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <img class="d-block w-100" src="{{asset('Storage'.'/'.$izamal->imagen)}}" alt="slider_img" width="10px" height="550px" >
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI;">{{$izamal->descripcion}}</p>
               </div>
               <div class="col-md-8">
               </div>
            </div>
            <div class="row">
               <div class="col-md-6" style="height: auto; padding: 50px; padding-bottom: 50px;">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$exconvento->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808;">{{$exconvento->nombre}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI;  margin-bottom:50px">{{$exconvento->descripcion}}</p>
               </div>
               <div class="col-md-6" style="height: auto; padding: 50px; padding-bottom: 50px;">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$museo->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808;">{{$museo->nombre}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI; margin-bottom:50px">{{$museo->descripcion}}</p>
               </div>
               <div class="col-md-6" style="height: auto; padding-top: 20px; padding-bottom: 20px;">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$piramide->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808;">{{$piramide->nombre}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI; margin-bottom: 20px">{{$piramide->descripcion}}</p>
               </div>
               <div class="col-md-6" style="height: auto; padding-top: 20px; padding-bottom: 20px;">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$mayo->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808;">{{$mayo->nombre}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI; margin-bottom: 10px">{{$mayo->descripcion}}</p>
               </div>
               <div class="col-md-6" style="height: auto; padding-top: 10px; padding-bottom: 10px;">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$agosto->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808;">{{$agosto->nombre}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI; margin-bottom: 20px">{{$agosto->descripcion}}</p>
               </div>
               <div class="col-md-6" style="height: auto; padding-top: 30px; padding-bottom: 30px;">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$octubre->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808;">{{$octubre->nombre}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI; margin-bottom: 10px">{{$octubre->descripcion}}</p>
               </div>
               <div class="col-md-6" style="height: auto; padding-top: 10px; padding-bottom: 50px;">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$noviembre->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808;">{{$noviembre->nombre}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI; margin-bottom: 10px">{{$noviembre->descripcion}}</p>
               </div>
               <div class="col-md-6" style="height: auto; padding-top: 10px; padding-bottom: 80px;">
                  <img class="margin_top_30 img-responsive" src="{{asset('Storage'.'/'.$diciembre->imagen)}}" alt="#" />
                  <h3 class="blog_head" style="background:#F09808;">{{$diciembre->nombre}}</h3>
                  <p style="text-align: justify; font-size: 120%; font-family:Homer Simpson UI; margin-bottom: 10px">{{$diciembre->descripcion}}</p>
               </div>
            </div>
        </div>
</div>

@endsection 