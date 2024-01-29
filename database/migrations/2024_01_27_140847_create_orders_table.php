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
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('store_id');
            // $table->string('order_number')->unique();
            // $table->decimal('total_amount', 10, 2);
            // $table->string('status')->default('pending');
            // $table->timestamps();

            // // Foreign key constraints
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('store_id')->references('id')->on('stores');
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