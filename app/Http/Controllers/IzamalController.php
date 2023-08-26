<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Izamal;

class IzamalController extends Controller
{
    //
    public function izamal(){
        $izamal = Izamal::where('id_izamal','=',1)->select('id_izamal','nombre','descripcion','imagen')->first();
        $mayo = Izamal::where('id_izamal','=',2)->select('id_izamal','nombre','descripcion','imagen')->first();
        $agosto = Izamal::where('id_izamal','=',3)->select('id_izamal','nombre','descripcion','imagen')->first();
        $octubre = Izamal::where('id_izamal','=',4)->select('id_izamal','nombre','descripcion','imagen')->first();
        $noviembre = Izamal::where('id_izamal','=',5)->select('id_izamal','nombre','descripcion','imagen')->first();
        $diciembre = Izamal::where('id_izamal','=',6)->select('id_izamal','nombre','descripcion','imagen')->first();
        $piramide = Izamal::where('id_izamal','=',7)->select('id_izamal','nombre','descripcion','imagen')->first();
        $museo = Izamal::where('id_izamal','=',8)->select('id_izamal','nombre','descripcion','imagen')->first();
        $exconvento = Izamal::where('id_izamal','=',9)->select('id_izamal','nombre','descripcion','imagen')->first();
        return view('PaginaWeb.vistas.Izamal.izamal', compact('izamal','mayo','agosto','octubre','noviembre','diciembre','piramide','museo','exconvento'));
    }
}
