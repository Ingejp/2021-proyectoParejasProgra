<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = 'idcategoria';
    protected $guarded = ['idcategoria'];
    public $timestamps = false;
    protected $table = 'categoria';
    public $incrementing = true;

}
