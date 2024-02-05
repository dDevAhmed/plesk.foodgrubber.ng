<?php

namespace App\Models\People;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'store_id', 'product_id', 'image', 'name', 'unit_price', 'quantity', 'total_price'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
