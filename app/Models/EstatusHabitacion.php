<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusHabitacion extends Model
{
    use HasFactory;
    protected $table = 'estatus_habitacion';
    protected $guarded = 'id_estatus_habitacion';
    protected $primaryKey =  'id_estatus_habitacion';
    public $incrementing = true;
    public $timestamps = false;
}
