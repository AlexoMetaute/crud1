<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGranjaAuxiliar1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('granja_auxiliar1s', function (Blueprint $table) {
            $table->id();

            $table->string('id_granja');
            $table->string('campo15');
            $table->string('campo16');

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
        Schema::dropIfExists('granja_auxiliar1s');
    }
}
