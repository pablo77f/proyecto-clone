<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
  protected $fillable = ['nombre_corto','descripcion','login'];
  protected $table = 'tipo';

  public function funciones()
  {
      return $this->belongsToMany('App\Funcion', 'tipo_funcion', 'id_tipo','id_funcion');
  }
}
