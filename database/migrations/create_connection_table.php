<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateConecctionsTable extends Migration
{
    public function up()
    {
        Schema::create('connections', function (Blueprint $table)
         {
            $table->id();
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->boolean('type');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamps();  
          });
    }
    public function down()
    {
        Schema::drop('connections');
    }

}