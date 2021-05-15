<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTarifa extends Model
{
    protected $table = "tarifa";

    public $timestamps = false;

    protected $fillable = [
        "id_tarifa", "nombre_tarifa", "precio_regular", "precio_ofertado", "precio_alta_ocupacion", "id_tipo_habitacion"
    ];

    protected $primaryKey = "id_tarifa";
}
