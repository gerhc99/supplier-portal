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
        Schema::table('invoices', function (Blueprint $table) {
           /* $table->string('rfc_receptor')->nullable();
            $table->string('rfc_emisor')->nullable();
            $table->string('sello_cfd')->nullable();
            $table->string('total')->nullable();
            $table->string('status_sat')->nullable();*/
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('invoices', function (Blueprint $table) {
            /*$table->dropColumn('rfc_receptor');
            $table->dropColumn('rfc_emisor');
            $table->dropColumn('sello_cfd');
            $table->dropColumn('total');
            $table->dropColumn('status_sat');*/
    });
    }
};
