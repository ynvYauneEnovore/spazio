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
