<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\People\UserStore;
use App\Models\Products\Product;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\StoreResource;
use App\Http\Resources\V1\ProductResource;
use App\Http\Resources\V1\StoreCollection;
use App\Http\Resources\V1\ProductCollection;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function stores()
    {
        // return new ProductCollection(Store::paginate(20));
        return new StoreCollection(UserStore::where('availability', 1)
            ->where('status', 'a')
            ->get());
    }

    public function store(string $id)
    {
        $store = UserStore::with(['products' => function ($query) {
            $query->where('availability', 1); // Filter available products
        }])->find($id);

        if ($store) {
            // Assuming StoreResource includes product details:
            return new StoreResource($store);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Store not found'
            ]);
        }
    }


    public function products(string $id)
    {
        $store = UserStore::with(['products' => function ($query) {
            $query->where('availability', 1); // Apply availability filter during eager loading
        }])->find($id);

        if ($store) {
            $availableProducts = $store->products; // Access eager-loaded products
            return new ProductCollection($availableProducts);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Store not found'
            ], 404); // Specify 404 status code explicitly
        }
    }

    public function categories()
    {
        return response()->json(Category::select(['id', 'category', 'image'])->get());
    }
}
