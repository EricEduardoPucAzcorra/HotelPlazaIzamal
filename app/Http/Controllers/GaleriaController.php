<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;
class GaleriaController extends Controller
{
    //
    public function galeria(){


        $habitacion1 = Galeria::where('id_galeria','=',1)->select('id_galeria','imagen','descripcion')->first();
        $habitacion2 = Galeria::where('id_galeria','=',2)->select('id_galeria','imagen','descripcion')->first();
        $habitacion3 = Galeria::where('id_galeria','=',3)->select('id_galeria','imagen','descripcion')->first();
        $habitacion4 = Galeria::where('id_galeria','=',4)->select('id_galeria','imagen','descripcion')->first();
        $habitacion5 = Galeria::where('id_galeria','=',5)->select('id_galeria','imagen','descripcion')->first();
        $habitacion6 = Galeria::where('id_galeria','=',6)->select('id_galeria','imagen','descripcion')->first();
        $banio1 = Galeria::where('id_galeria','=',7)->select('id_galeria','imagen','descripcion')->first();
        $banio2 = Galeria::where('id_galeria','=',8)->select('id_galeria','imagen','descripcion')->first();
        $banio3 = Galeria::where('id_galeria','=',9)->select('id_galeria','imagen','descripcion')->first();
        $banio4 = Galeria::where('id_galeria','=',10)->select('id_galeria','imagen','descripcion')->first();
        $banio5 = Galeria::where('id_galeria','=',11)->select('id_galeria','imagen','descripcion')->first();
        $banio6 = Galeria::where('id_galeria','=',12)->select('id_galeria','imagen','descripcion')->first();
        $piscina = Galeria::where('id_galeria','=',13)->select('id_galeria','imagen','descripcion')->first();
        $servidor1 = Galeria::where('id_galeria','=',14)->select('id_galeria','imagen','descripcion')->first();
        $servidor = Galeria::where('id_galeria','=',15)->select('id_galeria','imagen','descripcion')->first();
        $terraza = Galeria::where('id_galeria','=',16)->select('id_galeria','imagen','descripcion')->first();
        $terraza1 = Galeria::where('id_galeria','=',17)->select('id_galeria','imagen','descripcion')->first();
        $amenidades = Galeria::where('id_galeria','=',18)->select('id_galeria','imagen','descripcion')->first();
        return view('PaginaWeb.vistas.Galeria.galeria', compact('habitacion1','habitacion2','habitacion3','habitacion4','habitacion5',
        'habitacion6','banio1','banio2','banio3','banio4','banio5','banio6','piscina','servidor1','servidor','terraza','terraza1','amenidades'));
    }
}
