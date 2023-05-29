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
        Schema::create('pago_matricula', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto', 19, 2);
            $table->foreignId('fk_user_id_pago_matricula')->constrained('users');
            $table->foreignId('fk_caja_chica_id_pago_matricula')->constrained('caja_chica');
            $table->foreignId('fk_matricula_id_pago_matricula')->constrained('matricula');


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
        Schema::dropIfExists('pago_matricula');
    }
};
