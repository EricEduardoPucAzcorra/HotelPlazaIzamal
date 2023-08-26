<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion_Habitacion extends Model
{
    use HasFactory;
    protected $table='reservacion_habitacion';
    protected $primaryKey='id';
    public $incrementing=true;

    public $timestamps=false;
    //lista de campos que van a consumir valor
    protected $fillable=[
    	
        'id',
        'tipo_habitacion',
        'descripcion',
        'imagen',
        'servicios',
        'id_tarifas',
        'precio_efectivo',
        'precio_targeta',
    ];
}
