<?php

namespace App\Models\Products;

use App\Models\People\UserStore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $connection = 'foodgrubber_foodpartners';
    protected $table = 'products';   
    
    public function userstore()
    {
        return $this->belongsTo(UserStore::class, 'store_id');
    }
}
