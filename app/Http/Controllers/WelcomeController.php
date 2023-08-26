<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shider_imgs;
use App\Models\Quienes_Somos;

class WelcomeController extends Controller
{
    public $imageninicio;
    // es el apartado de shider de imagenes
    public function shider_imgs(){
        $imagenprincipal = Shider_imgs::where('id_shider','=',1)->select('id_shider','imagen','titulo','descripcion')->first();
        $imagenes = Shider_imgs::where('id_shider','>',1)->get(); 
        $this->quienessomos();
        $somos = $this->imageninicio;
       return view('welcome', compact('imagenes','imagenprincipal','somos'));
       //dd($this->imageninicio);
        
    }

    public function quienessomos(){
        $this->imageninicio = Quienes_Somos::where('id_quienes_somos','=',1)->select('id_quienes_somos','titulo','biografia','imagen')->first();
       // return $this->imageninicio;
        
    }
    

}
