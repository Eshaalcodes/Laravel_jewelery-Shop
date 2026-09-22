<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function products(Request $request)
    {
        $query = Product::with([
            'category',
            'subcategory'
        ]);

        // Category filter
        if ($request->filled('category')) {

            $query->whereHas('category', function ($q) use ($request) {

                $q->where('name', $request->category);

            });
        }

        // Product search
        if ($request->filled('search')) {

            $query->where(
                'name',
                'like',
                '%' . $request->search . '%'
            );
        }

         $products = $query->paginate(6)->withQueryString();

        return view(
            'shop.products',
            compact('products')
        );
    }
    public function show($id)
{
    $product = Product::with([
        'category',
        'subcategory'
    ])->findOrFail($id);

    return view('shop.product-detail', compact('product'));
}
}