<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function account()
    {
        $pageTitle = 'Account | Foodgrubber';
        $categories = Category::pluck('category');
        $customer = Auth::user();
        return view('market.account', compact('pageTitle', 'categories', 'customer'));
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
    
    // public function checkout()
    // {
    //     $pageTitle = 'Checkout | Foodgrubber';
    //     $categories = Category::pluck('category');
    //     return view('market.checkout', compact('pageTitle', 'categories'));
    // }
}
