<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
  protected $fillable = ['nombre','apellido','email','facebook','linkedin','foto','web','curriculum'];
  protected $table = 'staff';
}
