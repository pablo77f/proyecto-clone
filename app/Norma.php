<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Norma extends Model
{
  protected $fillable = ['nombre_corto','descripcion','login'];
  protected $table = 'norma';

  public function categorias()
  {
      return $this->belongsToMany('App\Categoria', 'norma_categoria', 'id_norma','id_categoria');
  }
}
