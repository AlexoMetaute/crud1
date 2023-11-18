<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogisticaAuxiliar2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logistica_auxiliar2s', function (Blueprint $table) {
            $table->id();

            $table->string('id_logistica');
            $table->string('campo23');
            $table->string('campo24');

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
        Schema::dropIfExists('logistica_auxiliar2s');
    }
}
