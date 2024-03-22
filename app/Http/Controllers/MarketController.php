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

    public function store($id)
    {
        $pageTitle = 'Store | Foodgrubber';
        $categories = Category::pluck('category');

        $store = UserStore::with(['products' => function ($query) {
            $query->where('availability', 1); // Apply availability filter during eager loading
        }])->find($id);

        $storeProducts = $store->products;

        return view('market.store', compact('pageTitle', 'categories', 'store', 'storeProducts'));
    }

    public function search($categorySearched)
    {
        $pageTitle = 'Search | Foodgrubber';
        $categories = Category::pluck('category');

        $categoryStores = UserStore::whereHas('products', function ($query) use ($categorySearched) {
            $query->where('category', $categorySearched); // Assuming category_id is the actual column
        })->where('availability', 1)->get();

        $categoryCounts = [];
        foreach ($categories as $category) {
            $count = UserStore::whereHas('products', function ($query) use ($category) {
                $query->where('category', $category);
            })->where('availability', 1)->count();
            $categoryCounts[$category] = $count;
        }

        return view('market.search', compact('pageTitle', 'categories', 'categorySearched', 'categoryStores', 'categoryCounts'));

    }

    public function contact()
    {
        $pageTitle = 'Contact | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.contact', compact('pageTitle', 'categories'));
    }

    public function privacy()
    {
        $pageTitle = 'Privacy Policy | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.privacy', compact('pageTitle', 'categories'));
    }

    public function terms()
    {
        $pageTitle = 'Terms of Service | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.terms', compact('pageTitle', 'categories'));
    }
}
