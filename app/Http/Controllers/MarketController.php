<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;

class MarketController extends Controller
{
    public function market()
    {
        $products = Product::where('availability', 1)->get();       //paginate to 20
        $categories = Category::pluck('category');

        return view('market.index', compact('products', 'categories'));
    }

    public function product($id)
    {
        // Logic to handle individual product pages
        return view('market.product', ['product_id' => $id, 'categories' => ['seed', 'plant']]);
    }

    public function search()
    {
        $categories = Category::pluck('category');
        return view('market.search', compact('categories'));
    }

    // fixme - goes to userController
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
