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
        Schema::create('caja_chica', function (Blueprint $table) {
            $table->id();
            $table->decimal('montoInicial', 19, 2);
            $table->decimal('montoSistema', 19, 2);
            $table->decimal('montoDeclarado', 19, 2);
            $table->decimal('diferencia', 19, 2);
            $table->datetime('fechaInicio');
            $table->datetime('fechaCierre');
            $table->text('Detalle');
            $table->boolean('estado', '1');
            $table->foreignId('fk_user_id_caja_chica')->constrained('users');
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
        Schema::dropIfExists('caja_chica');
    }
};
