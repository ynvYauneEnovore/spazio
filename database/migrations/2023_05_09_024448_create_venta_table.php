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
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto', 19, 2);
            $table->datetime('created');
            $table->foreignId('fk_user_id_venta')->constrained('users');
            $table->foreignId('fk_caja_chica_id_venta')->constrained('caja_chica');
            $table->foreignId('fk_cliente_id_venta')->constrained('cliente');


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
        Schema::dropIfExists('venta');
    }
};
