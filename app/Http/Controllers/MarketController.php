<?php

namespace App\Http\Controllers;

use App\Models\People\UserStore;
use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;

class MarketController extends Controller
{
    public function market()
    {
        $pageTitle = 'Market | Foodgrubber';
        $userStores = UserStore::where('status', 'a')
            ->where('availability', 1)
            ->get();       //paginate to 20
        $categories = Category::pluck('category');

        return view('market.index', compact('pageTitle', 'userStores', 'categories'));
    }

    public function contact()
    {
        $pageTitle = 'Contact | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.contact', compact('pageTitle', 'categories'));
    }

    public function store($id)
    {
        // Logic to handle individual product pages
        $pageTitle = 'Store | Foodgrubber';
        $categories = Category::pluck('category');
        $store = UserStore::findOrFail($id);
        return view('market.store', compact('pageTitle', 'categories', 'store'));
    }

    public function testStore()
    {
        // Logic to handle individual product pages
        $pageTitle = 'Store | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.store', compact('pageTitle', 'categories',));
    }

    public function search()
    {
        $pageTitle = 'Search | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.search', compact('pageTitle', 'categories'));
    }
}
