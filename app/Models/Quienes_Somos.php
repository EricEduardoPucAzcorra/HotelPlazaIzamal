<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quienes_Somos extends Model
{
    use HasFactory;
    protected $table='quienes_somos';
    protected $primaryKey='id';
    public $incrementing=true;

    public $timestamps=false;
    //lista de campos que van a consumir valor
    protected $fillable=[
    	
        'id',
        'titulo',
        'biografia',
        'imagen',
    ];
}
