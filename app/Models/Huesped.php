<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    protected $table='huesped';
    public $timestamps=false;
    protected $fillable=[
        'id_huesped', 'nombre_huesped', 'telefono_huesped','direccion_huesped', 'nacionalidad_huesped','correo_huesped','nit_huesped','dpi_huesped','foto_huesped'
    ];

    protected $primaryKey='id_huesped';
}
