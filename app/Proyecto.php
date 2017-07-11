<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['nombre','descripcion','proyecto_html'];
    protected $table = 'proyecto';
}
