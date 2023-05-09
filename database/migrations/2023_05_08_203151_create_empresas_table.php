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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('Razonsocial', 445)->nullable();
            $table->string('Nit', 45)->nullable();
            $table->string('Propietario', 45)->nullable();
            $table->string('Empresacol', 45)->nullable();
            $table->string('Direccion', 445)->nullable();
            $table->string('Casamatriz', 45)->nullable();
            $table->string('Numerosucusal', 45)->nullable();
            $table->string('Telefono', 45)->nullable();
            $table->string('Celular', 45)->nullable();
            $table->string('Actividad', 445)->nullable();
            $table->string('Logo', 45)->nullable();
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
        Schema::dropIfExists('empresas');
    }
};
