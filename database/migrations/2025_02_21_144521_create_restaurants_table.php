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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('type')->default('user')->comment('dine-in,take-away,both');
            $table->string('logo')->nullable()->default('images/restaurant-logo.png');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('country_id')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('delivery_radius_in_km')->nullable();
            $table->string('currency')->nullable();
            $table->string('no_of_floors')->nullable();
            $table->string('no_of_tables')->nullable();
            $table->string('has_table_booking')->nullable();
            $table->string('has_online_delivery')->nullable();
            $table->decimal('total_ernings',10,2)->nullable()->default(0.00);
            $table->string('login_platform')->nullable()->comment('web,andoird,ios')->default('web');
            $table->string('status')->nullable()->comment('draft,active,block')->default('active');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
