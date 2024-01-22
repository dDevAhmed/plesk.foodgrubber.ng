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
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id(); // Primary key

            // Essential fields
            $table->string('email')->unique(); // Unique email address
            $table->timestamp('subscribed_at')->nullable(); // Sign-up timestamp
            $table->timestamp('unsubscribed_at')->nullable(); // Unsubscribe timestamp

            // Optional fields (depending on your needs)
            $table->string('name')->nullable(); // Subscriber's name
            // $table->string('verification_token')->nullable(); // Token for email verification
            $table->string('marketing_preferences')->nullable(); // Communication preferences
            $table->timestamp('last_email_sent_at')->nullable(); // Track email activity
            $table->ipAddress('signup_ip_address')->nullable(); // IP address at signup

            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers');
    }
};
