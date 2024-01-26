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
        $pageTitle = 'Market | Foodgrubber';
        $products = Product::where('availability', 1)->get();       //paginate to 20
        $categories = Category::pluck('category');

        return view('market.index', compact('pageTitle', 'products', 'categories'));
    }

    public function contact()
    {
        $pageTitle = 'Contact | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.contact', compact('pageTitle', 'categories'));
    }

    public function product($id)
    {
        // Logic to handle individual product pages
        $pageTitle = 'Product | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.product', compact('pageTitle', 'categories', 'id'));
    }

    public function search()
    {
        $pageTitle = 'Search | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.search', compact('pageTitle', 'categories'));
    }
}
