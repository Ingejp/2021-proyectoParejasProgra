<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table = 'habitacion';
    protected $guarded = 'id_habitacion';
    protected $primaryKey =  'id_habitacion';
    public $incrementing = true;
    public $timestamps = false;
}
