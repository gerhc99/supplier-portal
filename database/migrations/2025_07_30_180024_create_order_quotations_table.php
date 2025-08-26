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
        Schema::create('order_quotations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('quotation_no')->nullable();
            $table->string('customer_quo_no')->nullable();
            $table->string('cust_ref')->nullable();
            $table->date('date_entered')->nullable();
            $table->string('delivery_leadtime')->nullable(false);
            $table->string('label_note')->nullable();
            $table->string('note_text')->nullable();
            $table->date('wanted_delivery_date')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_quotations');
    }
};
