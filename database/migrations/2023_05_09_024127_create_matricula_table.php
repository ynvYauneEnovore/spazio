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
        Schema::create('matricula', function (Blueprint $table) {
            $table->id();
            $table->datetime('created');
            $table->date('inicio');
            $table->date('fin');
            $table->decimal('precio', 19, 2);
            $table->boolean('estado', '1');
            $table->integer('nvisitas');
            $table->foreignId('fk_user_id_matricula')->constrained('users');
            $table->foreignId('fk_caja_chica_id_matricula')->constrained('caja_chica');
            $table->foreignId('fk_cliente_id_matricula')->constrained('cliente');
            $table->foreignId('fk_clase_id_matricula')->constrained('clases');


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
        Schema::dropIfExists('matricula');
    }
};
