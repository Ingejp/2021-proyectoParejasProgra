<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    use HasFactory;

    protected $table = 'estatus';
    protected $guarded = 'id_estatus';
    protected $primaryKey =  'id_estatus';
    public $incrementing = true;
    public $timestamps = false;
}
