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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('order_no')->nullable();
            $table->string('addr_no')->nullable();
            $table->string('authorize_code')->nullable();
            $table->string('authorize_id')->nullable();
            $table->string('buyer_code')->nullable();
            $table->string('contract')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('delivery_terms')->nullable();
            $table->string('language_code')->nullable();
            $table->string('note_id')->nullable();
            $table->string('pre_accounting_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
