<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('primer_apellido');
        $table->string('segundo_apellido')->nullable();
        $table->string('email')->unique();
        $table->integer('telefono')->nullable();
        $table->integer('carnet')->unique();
        $table->string('cargo')->nullable();
        $table->string('direccion')->nullable();
        $table->string('password');
        $table->string('espacioAsignado')->nullable();
        $table->string('imagen')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
