<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    //
    protected $fillable = ['nombre_corto','descripcion','valor','login'];
    protected $table = 'parametro';
    public $timestamps = false;

}
