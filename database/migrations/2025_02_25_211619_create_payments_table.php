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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->foreignId('restaurant_owner_id')->constrained('users');
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('subscription_id')->constrained('subscription_plans');
            $table->string('date')->default(date('Y-m-d'));
            $table->string('transaction_id');
            $table->decimal('amount',10,2)->default(0.00);
            $table->string('status')->comment('pending,paid')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
