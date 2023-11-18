<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();

            $table->string("nombre");
            $table->string('id_empleado');
            $table->string('id_empresa');
            $table->string('id_sede');
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo apellido');
            $table->string('fecha_nacimiento');
            $table->string('edad');
            $table->string('genero');
            $table->string('tipo_sangre');
            $table->string('rh');
            $table->string('peso');
            $table->string('estatura');
            $table->string('talla');

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
        Schema::dropIfExists('empleados');
    }
}
