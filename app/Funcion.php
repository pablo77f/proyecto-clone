<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    //
    protected $fillable = ['nombre_corto','descripcion','funcion','login'];
    protected $table = 'funcion';

    public function tipos()
    {
        return $this->belongsToMany('App\Tipo', 'tipo_funcion','id_funcion','id_tipo');
    }

}
