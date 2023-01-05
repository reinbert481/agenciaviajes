<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->string('marca',45);
            $table->string('modelo',45);
            $table->longText('imagen');
            $table->float('precioPorDia',8,2);
            $table->enum('tipoCaja',['MANUAL','AUTOMATICA']);
            $table->integer('cantidadPuertas');
            $table->boolean('aireAcond');
            $table->integer('kilomHabilitado');
            $table->string('tipoCobertura',45);
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
        Schema::dropIfExists('vehiculos');
    }
};
