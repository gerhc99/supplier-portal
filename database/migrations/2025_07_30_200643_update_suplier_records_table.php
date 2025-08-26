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
        //
        Schema::table('supplier_records', function (Blueprint $table) {
           /* $table->string('razon_social')->nullable()->change();
            $table->string('giro')->nullable()->change();
            $table->string('repse')->nullable()->change();
            $table->string('rfc')->nullable()->change();
            $table->string('telefono')->nullable()->change();
            $table->string('fax')->nullable()->change();
            $table->string('domicilio')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('colonia')->nullable()->change();
            $table->string('ciudad')->nullable()->change();
            $table->string('cp')->nullable()->change();
            $table->string('gerente_general')->nullable()->change();
            $table->string('contacto_general_nombre')->nullable()->change();
            $table->string('contacto_general_telefono')->nullable()->change();
            $table->string('contacto_general_email')->nullable()->change();
            $table->string('contacto_cuentas')->nullable()->change();
            $table->string('contacto_cuentas_telefono')->nullable()->change();
            $table->string('contacto_cuentas_email')->nullable()->change();
            $table->string('imss')->nullable()->change();
            $table->string('anios')->nullable()->change();
            $table->string('condiciones_establecimiento')->nullable()->change();
            $table->string('numero_empleados')->nullable()->change();
            $table->string('convenios')->nullable()->change();
            $table->string('banco_nombre')->nullable()->change();
            $table->string('banco_direccion')->nullable()->change();
            $table->string('banco_cuenta')->nullable()->change();
            $table->string('banco_clabe')->nullable()->change();
            $table->string('banco_nombre_dolares')->nullable()->change();
            $table->string('banco_direccion_dolares')->nullable()->change();
            $table->string('banco_cuenta_dolares')->nullable()->change();
            $table->string('banco_clabe_dolares')->nullable()->change();
            $table->string('banco_aba_dolares')->nullable()->change();
            $table->string('banco_swift_dolares')->nullable()->change();
            $table->string('banco_codigo_dolares')->nullable()->change();
            $table->string('banco_domicilio_dolares')->nullable()->change();
            $table->string('datos_responsable')->nullable()->change();
            $table->string('verificador_nombre')->nullable()->change();
            $table->string('verificador_firma')->nullable()->change();
            $table->string('verificador_fecha')->nullable()->change();
            $table->string('observaciones_compras')->nullable()->change();
           */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
