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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique();
            $table->string('title');
            $table->decimal('price',10,2)->default(0);
            $table->decimal('sale_price',10,2)->default(0)->nullable();
            $table->decimal('duration_in_days',5,2)->default(0);
            $table->decimal('trial_period_in_days',5,2)->default(0)->nullable();
            $table->text('remarks')->nullable();
            $table->string('status')->default('active')->comment('active','inactive','pending')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
