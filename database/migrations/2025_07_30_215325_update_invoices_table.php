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
        $table->string('invoice_id')->nullable()->change();
        $table->date('invoice_date')->nullable()->change();
        $table->date('due_date')->nullable()->change();
        $table->string('curr_rate')->nullable()->change();
        $table->date('creation_date')->nullable()->change();
        $table->string('invoice_version')->nullable()->change();
        $table->date('pay_term_base_date')->nullable()->change();
        $table->string('rowversion')->nullable()->change();
        $table->string('acc_year_invoice_date')->nullable()->change();
        $table->string('acc_period_invoice_date')->nullable()->change();
        $table->date('bi_timestamp')->nullable()->change();


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
