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
            $table->string('note_id')->nullable(false);
            $table->string('pre_accounting_id')->nullable(false);
            $table->string('ship_via_code')->nullable();
            $table->string('vendor_no')->nullable();
            $table->date('change_date')->nullable(false);
            $table->string('contact')->nullable();
            $table->date('date_entered')->nullable(false);
            $table->string('label_note')->nullable();
            $table->string('note_text')->nullable();
            $table->string('order_code')->nullable();
            $table->date('order_date')->nullable(false);
            $table->string('pick_list_flag')->nullable();
            $table->string('communicated')->nullable();
            $table->string('revision')->nullable(false);
            $table->string('vendor_co_no')->nullable();
            $table->date('wanted_receipt_date')->nullable(false);
            $table->string('recipient_name')->nullable();
            $table->string('country_code')->nullable();
            $table->string('customer_po_no')->nullable();
            $table->string('pay_term_id')->nullable();
            $table->string('approval_rule')->nullable();
            $table->string('forwarder_id')->nullable();
            $table->string('blanket_date')->nullable();
            $table->string('schedule_agreement_order')->nullable();
            $table->string('internal_destination')->nullable();
            $table->string('destination_id')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('address4')->nullable();
            $table->string('address5')->nullable();
            $table->string('address6')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('addr_state')->nullable();
            $table->string('county')->nullable();
            $table->string('reference')->nullable();
            $table->string('addr_flag')->nullable();
            $table->string('central_order_flag')->nullable();
            $table->string('consolidated_flag')->nullable();
            $table->string('document_address_id')->nullable();
            $table->string('doc_addr_no')->nullable();
            $table->string('invoicing_supplier')->nullable();
            $table->string('intrastat_exempt')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->string('orders_sequence_no')->nullable();
            $table->string('orders_version_no')->nullable();
            $table->string('ordchg_sequence_no')->nullable();
            $table->string('ordchg_version_no')->nullable();
            $table->string('del_terms_location')->nullable();
            $table->string('project_id')->nullable();
            $table->string('case_id')->nullable();
            $table->string('task_id')->nullable();
            $table->string('project_address_flag')->nullable();
            $table->string('project_address_id')->nullable();
            $table->string('template_id')->nullable();
            $table->string('purchase_code')->nullable();
            $table->string('authorization_rejected')->nullable();
            $table->string('reject_reason_id')->nullable();
            $table->string('rejected_by')->nullable();
            $table->date('rejected_date')->nullable();
            $table->string('ext_transport_calendar_id')->nullable();
            $table->string('use_price_incl_tax')->nullable();
            $table->string('total_amt_at_auth')->nullable();
            $table->string('route_id')->nullable();
            $table->string('tax_liability')->nullable();
            $table->string('pending_changes')->nullable();
            $table->string('communicated_via')->nullable();
            $table->string('changes_communicated_via')->nullable();
            $table->string('operation_id')->nullable();
            $table->string('use_buyer_doc_addr')->nullable();
            $table->string('text_id$')->nullable();

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
