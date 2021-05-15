<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    use HasFactory;
    protected $table = 'huesped';
    protected $guarded = 'id_huesped';
    protected $primaryKey =  'id_huesped';
    public $incrementing = true;
    public $timestamps = false;
}
