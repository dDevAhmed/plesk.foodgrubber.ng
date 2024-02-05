<?php

namespace App\Http\Controllers;

use App\Models\People\Cart;
use Illuminate\Http\Request;
use App\Models\People\CartItems;
use App\Models\Products\Product;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //Adding items to cart
    // Retrieving cart items
    // Updating quantity
    // Removing items
    // Clearing cart
    // Handling checkout (optional)

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

        return view('market.cart', compact('pageTitle', 'categories', 'cartTotalPrice', 'cartCount', 'cartItems'));
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

        return back()->with('success', 'Product added to cart');
        // return response()->json(['message' => 'Product added to cart successfully.']);
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

        // return response()->json(['message' => 'Item removed successfully']);
        return redirect('/cart');
    }

    public function checkout()
    {
        $pageTitle = 'Checkout | Foodgrubber';
        $categories = Category::pluck('category');

        $cart = Auth::user()->cart()->with('cartItems')->first();
        $cartTotalPrice = $cart->total;
        $cartItems = $cart->cartItems;

        // fixme - pass cart items, user id, store id, shipping service
        return view('market.checkout', compact('pageTitle', 'categories', 'cartTotalPrice', 'cart', 'cartItems'));
    }


    // public function store(Request $request)
    // {
    //     $productId = $request->input('product_id');
    //     $quantity = $request->input('quantity', 1);

    //     $product = Product::findOrFail($productId);

    //     // Check for existing cart item
    //     $cartItem = Cart::where('user_id', Auth::id())
    //                         ->where('product_id', $productId)
    //                         ->first();

    //     if ($cartItem) {
    //         $cartItem->quantity += $quantity;
    //         $cartItem->save();
    //     } else {
    //         Cart::create([
    //             'user_id' => Auth::id(),
    //             'product_id' => $productId,
    //             'quantity' => $quantity
    //         ]);
    //     }

    //     return response()->json(['message' => 'Product added to cart successfully.']);
    // }

    // public function destroy($id)
    // {
    //     Cart::destroy($id);
    //     return response()->json(['message' => 'Product removed from cart successfully.']);
    // }

    // public function clear()
    // {
    //     Cart::where('user_id', Auth::id())->delete();
    //     return response()->json(['message' => 'Cart cleared successfully.']);
    // }

    // Optional: Checkout
    // public function checkout()
    // {
    //     // Handle order creation and payment processing
    // }    
}
