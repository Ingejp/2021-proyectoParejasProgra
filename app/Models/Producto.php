<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'idproducto';
    protected $guarded = 'idproducto';
    public $timestamps = false;
    protected $table = 'producto';
    public $incrementing = true;

}
