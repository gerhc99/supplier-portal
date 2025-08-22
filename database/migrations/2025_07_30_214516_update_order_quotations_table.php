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
        Schema::table('order_quotations', function (Blueprint $table) {
        $table->string('delivery_leadtime')->nullable()->change();
        $table->string('note_id')->nullable()->change();
        $table->string('quotation_probability')->nullable()->change();
        $table->string('revision_no')->nullable()->change();
        $table->string('picking_leadtime')->nullable()->change();

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
