<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('ruc',11);
            $table->string('razon_social');
            $table->string('nombre_comercial')->nullable();
            $table->string('direccion_principal');
            $table->string('direccion_referencia')->nullable();
            $table->string('ubigeo')->nullable();
            $table->string('pagina_web')->nullable();
            $table->string('usuario_sol')->nullable();
            $table->string('clave_sol')->nullable();
            $table->string('certificado_pfx')->nullable();
            $table->string('certificado_pem')->nullable();
            $table->string('fecha_caduca_certificado')->nullable();
            $table->string('certificado_zip')->nullable();
            $table->string('clave_certificado')->nullable();
            $table->string('texto_encabezado')->nullable();
            $table->string('login')->nullable();
            $table->string('imagen_pie_pagina')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
