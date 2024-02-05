<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\People\Cart;
use Illuminate\Http\Request;
use App\Models\People\CartItems;
use App\Models\Products\Product;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        $pageTitle = 'Cart | Foodgrubber';
        $categories = Category::pluck('category');

        if (!Auth::check()) {
            // Redirect to login or display a message
            return redirect()->route('login')->with('error', 'Please log in to view your cart.');
        }

        $cart = Auth::user()->cart()->with('cartItems')->first();

        if (!$cart) {
            // Handle empty cart scenario
            // (e.g., display message or redirect to storefront)
            return view('market.cart', compact('pageTitle', 'categories'));
        }

        $cartItems = $cart->cartItems;
        $cartCount = $cart->quantity;
        $cartTotalPrice = $cart->total;

        // $cart->quantity = $cart->cartItems->count();
        // $cart->total = $cart->cartItems->sum('total_price');

        // return view('market.cart', compact('pageTitle', 'categories', 'cartTotalPrice', 'cartCount', 'cartItems'));
        return response()->json([
            'status' => 200,
            'cartTotalPrice' => $cartTotalPrice,
            'cartCount' => $cartCount,
            'cartItems' => $cartItems        
        ]);
    }


    public function getCartCount()
    {
        if (Auth::check()) {
            $cart = Auth::user()->cart;
            $count = $cart ? $cart->quantity : 0;
            // return response()->json(['count' => $count]);
            return $count;
        } else {
            // return response()->json(['count' => 0]); // Or redirect to login if needed
            return 0;
        }
    }

    public function addToCart(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Assuming you have a login route
        }

        $product = Product::findOrFail($id);
        $cart = Auth::user()->cart;

        if (!$cart) {
            // Create a new cart if it doesn't exist
            $cart = Cart::create([
                'customer_id' => Auth::id(),
                'store_id' => $product->store_id,
                'quantity' => 0,
                'total' => 0
            ]);
        }

        $existingItem = $cart->cartItems->where('product_id', $product->id)->first();
        if ($existingItem) {
            // Increment quantity of existing item
            $existingItem->quantity++;
            $existingItem->total_price = $existingItem->unit_price * $existingItem->quantity; // Recalculate total_price
            $existingItem->save();
        } else {
            // Create a new cart item
            CartItems::create([
                'cart_id' => $cart->id,
                'store_id' => $product->store_id, // Assuming you have a store_id on products
                'product_id' => $product->id,
                'image' => $product->image1,
                'name' => $product->name,
                'unit_price' => $product->price, // Assuming you have a price attribute
                'quantity' => 1,
                'total_price' => $product->price * 1 // Calculate total price appropriately
            ]);
        }

        $cart->quantity = $cart->cartItems->sum('quantity');
        $cart->total = $cart->cartItems->sum('total_price'); // Assuming total_price is used for item totals
        $cart->save(); // Update the cart with the calculated values

        // return back()->with('success', 'Product added to cart');
        return response()->json([
            'status' => 200,
            'message' => 'Product added to cart successfully.']);
    }

    public function removeFromCart($id)
    {
        $cartItem = CartItems::findOrFail($id);
        $cart = $cartItem->cart;

        $cartItem->delete();

        // Recalculate cart totals
        // $cart->quantity = $cart->cartItems->sum('quantity');
        $cart->quantity = $cart->cartItems->count();
        $cart->total = $cart->cartItems->sum('total_price');
        $cart->save();

        return response()->json([
            'status' => 200,
            'message' => 'Productremoved from cart successfully']);
        // return redirect('/cart');
    }
}
