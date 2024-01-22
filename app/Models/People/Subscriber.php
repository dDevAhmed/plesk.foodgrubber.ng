<?php

namespace App\Models\People;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'subscribed_at',
        'unsubscribed_at',
        // 'verification_token',
        'name',
        'marketing_preferences',
        'last_email_sent_at',
        'signup_ip_address',
    ];
}
