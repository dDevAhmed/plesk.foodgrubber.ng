<?php

namespace App\Models\People;

use App\Models\User;
use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    //     Cart belongs to User and Product.
    // User has many Cart items.
    // Product has many Cart items.

    protected $fillable = ['customer_id', 'store_id', 'quantity', 'total'];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItems::class, 'cart_id');
    }
}
