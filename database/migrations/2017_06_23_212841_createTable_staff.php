<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('staff', function (Blueprint $table) {
             $table->increments('id');
             $table->string('nombre',50);
             $table->string('apellido',50);
             $table->string('email',50)->nullable();
             $table->string('web',50)->nullable();
             $table->string('facebook',100)->nullable();
             $table->string('linkedin',100)->nullable();
             $table->string('foto',100)->nullable();
             $table->timestamps();
         });
         Schema::create('proyecto', function (Blueprint $table) {
             $table->increments('id');
             $table->string('nombre',50);
             $table->mediumtext('descripcion')->nullable();
             $table->string('foto',100)->nullable();
             $table->timestamps();
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('staff');
         Schema::dropIfExists('proyecto');
     }
}
