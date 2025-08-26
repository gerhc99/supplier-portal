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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company')->nullable();
            $table->string('invoice_id')->nullable(false);
            $table->string('identity')->nullable();
            $table->string('party_type')->nullable();
            $table->string('series_id')->nullable();
            $table->string('invoice_no')->nullable();
            $table->date('invoice_date')->nullable(false);
            $table->date('due_date')->nullable(false);
            $table->string('creator')->nullable();
            $table->date('delivery_date')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('curr_rate')->nullable(false);
            $table->string('div_factor')->nullable();
            $table->string('invoice_type')->nullable();
            $table->string('pay_term_id')->nullable();
            $table->string('series_reference')->nullable();
            $table->string('number_reference')->nullable();
            $table->string('code_j')->nullable();
            $table->string('project_id')->nullable();
            $table->string('project_activity_id')->nullable();
            $table->string('aff_line_post')->nullable();
            $table->string('prelim_code')->nullable();
            $table->date('creation_date')->nullable(false);
            $table->string('pre_acc_code_string')->nullable();
            $table->string('payment_address_id')->nullable();
            $table->string('way_pay_id')->nullable();
            $table->string('uuid')->nullable();
            $table->string('file_name')->nullable();
            $table->string('sat_cfdi_use')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('xml_field')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
