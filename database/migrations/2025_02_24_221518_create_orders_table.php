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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->foreignId('restaurant_owner_id')->constrained('users');
            $table->foreignId('subscription_plan_id')->constrained('subscription_plans');
            $table->string('coupon_id')->nullable();
            $table->decimal('coupon_discount',10,2)->default(0.00)->nullable();
            $table->string('tax_id')->nullable();
            $table->decimal('tax_amount',10,2)->default(0.00)->nullable();
            $table->decimal('sub_total',10,2)->default(0.00)->nullable();
            $table->decimal('net_amount',10,2)->default(0.00)->nullable();
            $table->date('trial_period_end_at')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('remarks')->nullable();
            $table->string('status')->comment('pending, confirmed, cancelled, return_requested, completed, return_completed')->nullable();
            $table->string('payment_status')->comment('pending, partial_paid, paid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
