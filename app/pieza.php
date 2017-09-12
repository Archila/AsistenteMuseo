<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pieza extends Model
{
    //
    protected $table = 'piezas';
    protected $primaryKey = 'cod_pieza';
    public $incrementing = false;

    public function ficha()
    {
        return $this->hasOne('App\fichas_informativa','foreign_key');
    }

}
