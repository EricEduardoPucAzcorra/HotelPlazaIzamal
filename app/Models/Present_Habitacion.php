<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Present_Habitacion extends Model
{
    use HasFactory;
    protected $table='present_habitacion';
    protected $primaryKey='id';
    public $incrementing=true;

    public $timestamps=false;
    //lista de campos que van a consumir valor
    protected $fillable=[
    	
        'id',
        'descripcion',
    ];

}
