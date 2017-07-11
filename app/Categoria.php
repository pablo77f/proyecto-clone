<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $fillable = ['nombre_corto','descripcion','login'];

    public function tipos()
    {
        return $this->belongsToMany('App\Tipo', 'categoria_tipo', 'id_categoria','id_tipo');
    }
}
