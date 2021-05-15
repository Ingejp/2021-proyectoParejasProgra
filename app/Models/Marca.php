<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $primaryKey = 'idmarca';
    protected $guarded = ['idmarca'];
    public $timestamps = false;
    protected $table = 'marca';
    public $incrementing = true;

}
