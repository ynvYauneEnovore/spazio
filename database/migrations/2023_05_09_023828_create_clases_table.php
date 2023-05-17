<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('sigla')->nullable();
            $table->decimal('precio_1', 19, 2)->nullable();
            $table->decimal('precio_2', 19, 2)->nullable();
            $table->decimal('precio_3', 19, 2)->nullable();
            $table->time('Horainicio')->nullable();
            $table->time('horafin')->nullable();
            $table->tinyInteger('estado')->nullable()->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clases');
    }
}
