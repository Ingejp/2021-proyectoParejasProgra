<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    use HasFactory;
    protected $table = 'tarifa';
    protected $guarded = 'id_tarifa';
    protected $primaryKey =  'id_tarifa';
    public $incrementing = true;
    public $timestamps = false;
}
