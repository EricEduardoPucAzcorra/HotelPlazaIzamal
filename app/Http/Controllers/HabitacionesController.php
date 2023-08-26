<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Present_Habitacion;
use App\Models\Reservacion_Habitacion;

class HabitacionesController extends Controller
{
    public $reservhabitacion;
    public $reservhabitacion2;
 //Es el apartado de presentar habitacones
 public function present_habitacion(){
     $presenabitacion = Present_Habitacion::where('id_presen_habitacion','=',1)->select('id_presen_habitacion','descripcion')->first();
     $this->reservacion_habitacion();
     $habitacion1 = $this->reservhabitacion;
     $habitacion2 = $this->reservhabitacion2;
     return view('PaginaWeb.vistas.Habitaciones.habitaciones', compact('presenabitacion','habitacion1','habitacion2'));
 }

 public function reservacion_habitacion(){
     $this->reservhabitacion = Reservacion_Habitacion::where('id_reservacion_habitacion','=',1)->select('id_reservacion_habitacion','tipo_habitacion','descripcion','imagen','servicios','id_tarifas','precio_efectivo','precio_targeta')->first();
     $this->reservhabitacion2 = Reservacion_Habitacion::where('id_reservacion_habitacion','=',2)->select('id_reservacion_habitacion','tipo_habitacion','descripcion','imagen','servicios','id_tarifas','precio_efectivo','precio_targeta')->first();
 }
}
