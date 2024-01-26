<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function account()
    {
        $pageTitle = 'Account | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.account', compact('pageTitle', 'categories'));
    }

    public function updateAccount()
    {
        $pageTitle = 'Account | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.account', compact('pageTitle', 'categories'));
    }

    public function wishlist()
    {
        $pageTitle = 'Wishlist | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.wishlist', compact('pageTitle', 'categories'));
    }

    public function cart()
    {
        $pageTitle = 'Cart | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.cart', compact('pageTitle', 'categories'));
    }
    
    public function checkout()
    {
        $pageTitle = 'Checkout | Foodgrubber';
        $categories = Category::pluck('category');
        return view('market.checkout', compact('pageTitle', 'categories'));
    }
}
