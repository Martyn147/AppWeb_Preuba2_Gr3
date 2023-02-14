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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->string('nombre_restaurante');
            $table->string('fotoID');
            $table->string('fotoDirec');
            $table->string('fotoOnline');
            $table->string('direccion_local');
            $table->string('gerente_local');
            $table->string('tipo_local');
            $table->string('correo_local');
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
        Schema::dropIfExists('restaurantes');
    }
};


