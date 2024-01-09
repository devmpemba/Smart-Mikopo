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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            //basic info
            $table->string('full_name');
            $table->string('email');
            $table->string('address');
            $table->integer('phone');
            $table->string('id_type');
            $table->string('id_number');
            //employment info (optional)
            $table->string('employer')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('monthly_salary')->nullable();
            //collateral info (mandatory)
            $table->string('collateral_name');
            $table->integer('collateral_phone');
            $table->string('collateral_email');
            $table->string('collateral_address');
            $table->string('collateral_id_type');
            $table->string('collateral_id_number');
            //loan informations
            $table->double('loan_amount');
            $table->string('loan_type');
            $table->double('interest');
            $table->string('status')->default('pending');
            $table->string('loan_emi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
