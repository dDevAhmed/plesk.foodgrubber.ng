<?php

namespace App\Models\People;

use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserStore extends Model
{
    use HasFactory;

    protected $connection = 'foodgrubber_foodpartners';
    protected $table = 'users_stores'; 

    public function products()
    {
        return $this->hasMany(Product::class, 'store_id');
    }
    
}
