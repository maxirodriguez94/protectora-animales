<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) 
        {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->string('tamaño');
            $table->string('raza');
            $table->text('descripcion');
            $table->string('foto');            
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('animals');
    }
}