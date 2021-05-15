<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    use HasFactory;
    protected $table = 'tipo_habitacion';
    protected $guarded = 'id_tipo_habitacion';
    protected $primaryKey =  'id_tipo_habitacion';
    public $incrementing = true;
    public $timestamps = false;
}
