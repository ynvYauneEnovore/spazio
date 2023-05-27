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
        Schema::create('venta_detalle', function (Blueprint $table) {
            $table->id();
            $table->decimal('cantidad', 19, 2)->nullable();
            $table->decimal('precioNeto', 19, 2)->nullable();
            $table->datetime('created');
            $table->decimal('descuento', 19, 2)->nullable();
            $table->foreignId('fk_categorias_servicios_id_venta_detalle')->nullable()->constrained('productos');
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
        Schema::dropIfExists('venta_detalle');
    }
};
