<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('supplier_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('razon_social')->nullable();
            $table->string('giro')->nullable();
            $table->string('repse')->nullable();
            $table->string('rfc')->nullable();
            $table->string('telefono')->nullable();
            $table->string('fax')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('email')->nullable();
            $table->string('colonia')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('cp')->nullable();
            $table->string('gerente_general')->nullable();
            $table->string('contacto_general_nombre')->nullable();
            $table->string('contacto_general_telefono')->nullable();
            $table->string('contacto_general_email')->nullable();
            $table->string('contacto_cuentas')->nullable();
            $table->string('contacto_cuentas_telefono')->nullable();
            $table->string('contacto_cuentas_email')->nullable();
            $table->string('imss')->nullable();
            $table->string('anios')->nullable();
            $table->string('condiciones_establecimiento')->nullable();
            $table->string('numero_empleados')->nullable();
            $table->string('convenios')->nullable();
            $table->string('banco_nombre')->nullable();
            $table->string('banco_direccion')->nullable();
            $table->string('banco_cuenta')->nullable();
            $table->string('banco_clabe')->nullable();
            $table->string('banco_nombre_dolares')->nullable();
            $table->string('banco_direccion_dolares')->nullable();
            $table->string('banco_cuenta_dolares')->nullable();
            $table->string('banco_clabe_dolares')->nullable();
            $table->string('banco_aba_dolares')->nullable();
            $table->string('banco_swift_dolares')->nullable();
            $table->string('banco_codigo_dolares')->nullable();
            $table->string('banco_domicilio_dolares')->nullable();
            $table->string('datos_responsable')->nullable();
            $table->string('verificador_nombre')->nullable();
            $table->string('verificador_firma')->nullable();
            $table->string('verificador_fecha')->nullable();
            $table->string('observaciones_compras')->nullable();         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_records');
    }
};
