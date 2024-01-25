<?php

namespace App\Models\People;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'email', 'billing_address', 'billing_city', 'billing_state', 'billing_country', 'billing_postcode', 'shipping_address', 'shipping_city', 'shipping_state', 'shipping_country', 'shipping_postcode'
    ];
    
}
