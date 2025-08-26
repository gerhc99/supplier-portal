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
           /* $table->string('xml_path')->nullable();
            $table->string('pdf_path')->nullable();
            $table->string('xml_path_file_names')->nullable();
            $table->string('pdf_path_file_names')->nullable();*/
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
           /* $table->dropColumn('xml_path');
            $table->dropColumn('pdf_path');
            $table->string('xml_path_file_names')->nullable();
            $table->string('pdf_path_file_names')->nullable();*/
    });
    }
};
