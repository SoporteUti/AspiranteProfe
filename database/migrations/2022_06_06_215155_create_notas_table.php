<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->unsignedBigInteger("numaspirante");
            $table->unsignedBigInteger("idmodulo");
            $table->string('email');
            $table->float("nota");
            $table->timestamps();

            $table->foreign('numaspirante')->references('numaspirante')->on('aspirantes')->onDelete("cascade");
            $table->foreign('idmodulo')->references('idmodulo')->on('modulos')->onDelete("cascade");
            $table->foreign('email')->references('email')->on('docentes')->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
