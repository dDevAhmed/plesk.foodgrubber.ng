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
            $table->string('customer_id');
            $table->string('store_id');
            $table->string('order_status');        //placed, processing, shipped, delivered, canceled
            $table->dateTime('order_date');
            $table->integer('total_amount');
            $table->string('delivery_address');
            $table->string('delivery_status');      //yes,no
            $table->dateTime('paid_date');
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
