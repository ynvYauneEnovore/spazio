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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('type')->default('Guest');
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->timestamps();
            $table->unique('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
