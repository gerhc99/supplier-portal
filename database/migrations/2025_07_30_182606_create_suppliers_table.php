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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('supplier_id')->nullable();
            $table->string('name')->nullable();
            $table->date('creation_date')->nullable(false);
            $table->string('association_no')->nullable();
            $table->string('party')->nullable();
            $table->string('default_language')->nullable();
            $table->string('country')->nullable();
            $table->string('party_type')->nullable();
            $table->string('suppliers_own_id')->nullable();
            $table->string('corporate_form')->nullable();
            $table->string('identifier_reference')->nullable();
            $table->string('picture_id')->nullable();
            $table->string('one_time')->nullable();
            $table->string('supplier_category')->nullable();
            $table->string('b2b_supplier')->nullable();
            $table->string('default_domain')->nullable();
            $table->string('identifier_ref_validation')->nullable();
            $table->string('text_id$')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
