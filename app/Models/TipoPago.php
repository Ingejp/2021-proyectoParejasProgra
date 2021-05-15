<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;
    protected $table = 'tipo_pago';
    protected $guarded = 'id_tipo_pago';
    protected $primaryKey =  'id_tipo_pago';
    public $incrementing = true;
    public $timestamps = false;
}
