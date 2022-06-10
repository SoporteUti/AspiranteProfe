<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
            $table->engine="InnoDB";

            $table->id();
            $table->unsignedBigInteger('numaspirante');
            $table->integer("anioegresob")->nullable();
            $table->integer("anioingresoues")->nullable();
            $table->float("notapromb")->nullable();
            $table->string("notaavanzo")->nullable();
            $table->string("notapaes")->nullable();
            $table->integer("pruebaling")->nullable();
            $table->integer("pruebapsico")->nullable();


       $table->foreign('numaspirante')->references('numaspirante')->on('aspirantes')->onDelete("cascade");

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
        Schema::dropIfExists('requisitos');
    }
}
