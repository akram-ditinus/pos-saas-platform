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
            $table->string('tax_id')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price',10,2)->default(0);
            $table->decimal('sale_price',10,2)->default(0)->nullable();
            $table->mediumInteger('duration_in_days')->default(0);
            $table->mediumInteger('trial_period_in_days')->default(0)->nullable();
            $table->text('remarks')->nullable();
            $table->string('status')->default('active')->comment('pending,active,inactive',)->nullable();
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
