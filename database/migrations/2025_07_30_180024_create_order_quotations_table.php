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
            $table->string('note_id')->nullable(false);
            $table->string('external_ref')->nullable();
            $table->string('quotation_probability')->nullable(false);
            $table->date('quotation_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->date('follow_up_date')->nullable();
            $table->string('quotation_note')->nullable();
            $table->date('request_received_date')->nullable();
            $table->date('answering_date')->nullable();
            $table->date('price_effectivity_date')->nullable();
            $table->string('lose_win_reject_note')->nullable();
            $table->string('lost_to')->nullable();
            $table->string('country_code')->nullable();
            $table->string('language_code')->nullable();
            $table->string('authorize_code')->nullable();
            $table->string('contract')->nullable();
            $table->string('ship_via_code')->nullable();
            $table->string('delivery_terms')->nullable();
            $table->string('agreement_id')->nullable();
            $table->string('customer_no')->nullable();
            $table->string('company')->nullable();
            $table->string('pay_term_id')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('market_code')->nullable();
            $table->string('district_code')->nullable();
            $table->string('region_code')->nullable();
            $table->string('salesman_code')->nullable();
            $table->string('ship_addr_no')->nullable();
            $table->string('bill_addr_no')->nullable();
            $table->string('revision_no')->nullable(false);
            $table->string('tax_liability')->nullable();
            $table->string('reason_id')->nullable();
            $table->string('closed_status')->nullable();
            $table->string('printed')->nullable();
            $table->string('calc_disc_flag')->nullable();
            $table->string('print_control_code')->nullable();
            $table->string('additional_discount')->nullable();
            $table->string('customer_no_pay')->nullable();
            $table->string('customer_no_pay_addr_no')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->string('del_terms_location')->nullable();
            $table->string('jinsui_invoice')->nullable();
            $table->string('classification_standard')->nullable();
            $table->string('rebate_customer')->nullable();
            $table->string('supply_country')->nullable();
            $table->string('forward_agent_id')->nullable();
            $table->string('freight_map_id')->nullable();
            $table->string('zone_id')->nullable();
            $table->string('freight_price_list_no')->nullable();
            $table->string('apply_fix_deliv_freight')->nullable();
            $table->string('fix_deliv_freight')->nullable();
            $table->string('ext_transport_calendar_id')->nullable();
            $table->string('use_price_incl_tax')->nullable();
            $table->string('business_opportunity_no')->nullable();
            $table->string('picking_leadtime')->nullable(false);
            $table->string('vendor_no')->nullable();
            $table->string('main_representative_id')->nullable();
            $table->string('vat_free_vat_code')->nullable();
            $table->string('single_occ_addr_flag')->nullable();
            $table->string('ship_addr_country_code')->nullable();
            $table->string('ship_addr_name')->nullable();
            $table->string('ship_address1')->nullable();
            $table->string('ship_address2')->nullable();
            $table->string('ship_address3')->nullable();
            $table->string('ship_address4')->nullable();
            $table->string('ship_address5')->nullable();
            $table->string('ship_address6')->nullable();
            $table->string('ship_addr_zip_code')->nullable();
            $table->string('ship_addr_city')->nullable();
            $table->string('ship_addr_state')->nullable();
            $table->string('ship_addr_county')->nullable();
            $table->string('ship_addr_in_city')->nullable();
            $table->string('free_of_chg_tax_pay_party')->nullable();
            $table->string('b2b_order')->nullable();
            $table->string('customer_tax_usage_type')->nullable();
            $table->string('disc_price_round')->nullable();
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
        Schema::dropIfExists('order_quotations');
    }
};
