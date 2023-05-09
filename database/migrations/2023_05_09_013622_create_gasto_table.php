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
        Schema::create('Gasto', function (Blueprint $table) {
            $table->id();
            $table->dateTime('created')->nullable();
            $table->string('descripcion', 545)->nullable();
            $table->decimal('monto', 19, 2)->nullable()->default(0);
            $table->unsignedBigInteger('tipo_gasto_id')->nullable();
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->unsignedBigInteger('caja_chica_id')->nullable();
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
        Schema::dropIfExists('gasto');
    }
};
