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
        Schema::create('venta_pago', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto', 19, 4);
            $table->dateTime('created')->nullable();
            $table->foreignId('fk_user_id_venta_pago')->constrained('users');
            $table->foreignId('fk_tipo_pago_id_venta_pago')->constrained('tipo_pago');
            $table->foreignId('fk_venta_id_venta_pago')->constrained('venta');
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
        Schema::dropIfExists('venta_pago');
    }
};
