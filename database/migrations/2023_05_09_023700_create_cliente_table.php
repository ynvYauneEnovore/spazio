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
        Schema::create('Cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nit', 45)->nullable();
            $table->string('codigoCliente', 20);
            $table->string('nombre', 445)->nullable();
            $table->string('direccion', 245)->nullable();
            $table->string('sexo', 45)->nullable();
            $table->string('telefono', 245)->nullable();
            $table->string('celular', 45)->nullable();
            $table->string('email', 245)->nullable();
            $table->integer('nvisitas')->nullable();
            $table->integer('puntosAcumulados')->nullable();
            $table->dateTime('ultimaVisita')->nullable();
            $table->date('fechaNacimiento')->nullable();
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
        Schema::dropIfExists('cliente');
    }
};
