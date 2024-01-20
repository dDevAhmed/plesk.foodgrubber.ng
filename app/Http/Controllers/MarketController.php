<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Http\Controllers\Controller;

class MarketController extends Controller
{
    public function index()
    {
        $products = Product::where('availability', 1)->get();       //paginate to 20
        return view('market.index', ['products' => $products]);
    }
    
    public function product($id)
    {
        // Logic to handle individual product pages
        return view('market.product', ['product_id' => $id]);
    }

    public function result(){
        return view('market.result');
    }

    public function account()
    {
        // Logic to handle individual product pages
        return view('market.account');
    }
    public function cart()
    {
        // Logic to handle individual product pages
        return view('market.cart');
    }
    public function checkout()
    {
        // Logic to handle individual product pages
        return view('market.checkout');
    }
}
