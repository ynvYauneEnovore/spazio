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
            $table->foreignId('fk_user_id_gasto')->constrained('users');
            $table->foreignId('fk_caja_chica_id_gasto')->constrained('caja_chica');
            $table->foreignId('fk_tipo_gasto_id_gasto')->constrained('tipo_gasto');
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
