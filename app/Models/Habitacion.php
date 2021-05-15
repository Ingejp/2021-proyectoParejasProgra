<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{

    protected $table='habitacion';
    public $timestamps=false;
    protected $fillable=[
        'idhabitacion', 'numero_habitacion','tipo_habitacion','piso'
    ];

    protected $primaryKey='idhabitacion';

    use HasFactory;

    protected $guarded = 'id_habitacion';
    public $incrementing = true;


}
