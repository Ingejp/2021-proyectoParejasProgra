<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Habitacion extends Model
{
    protected $table='tipo_habitacion';
    public $timestamps=false;
    protected $fillable=[
        'id_tipo_habitacion', 'tipo_habitacion','descripcion'
    ];

    protected $primaryKey='id_tipo_habitacion';
}
