<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pieza extends Model
{
    //
    protected $table = 'piezas';
    public $primaryKey = 'cod_pieza';
    public $incrementing = false;

}
