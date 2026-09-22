<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;

class ProductController extends Controller
{
    // SHOW PRODUCTS

    public function index(Request $request)
    {
        $query = Product::with([
            'category',
            'subcategory'
        ]);

        // Search by product name
        if ($request->filled('search')) {

            $query->where(
                'name',
                'like',
                '%' . $request->search . '%'
            );
        }

        $products = $query->get();

        return view(
            'products.index',
            compact('products')
        );
    }


    // CREATE PRODUCT FORM

    public function create()
    {
        $categories = Category::all();

        $subcategories = Subcategory::all();

        return view(
            'products.create',
            compact(
                'categories',
                'subcategories'
            )
        );
    }


    // STORE PRODUCT

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',

            'category_id' => 'required',

            'subcategory_id' => 'required',

            'description' => 'required',

            'price' => 'required',

            'quantity' => 'required',

            'status' => 'required',

        ]);


        // Create product

        $product = new Product();

        $product->category_id = $request->category_id;

        $product->subcategory_id = $request->subcategory_id;

        $product->name = $request->name;

        $product->description = $request->description;

        $product->price = $request->price;

        $product->quantity = $request->quantity;

        $product->status = $request->status;


        // Upload image only if selected

        if ($request->hasFile('image')) {

            $pic = $request
                ->file('image')
                ->store('products', 'public');

            $product->image = basename($pic);
        }


        $product->save();


        return redirect('/products');
    }


    // EDIT PRODUCT

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $categories = Category::all();

        $subcategories = Subcategory::all();

        return view(
            'products.edit',
            compact(
                'product',
                'categories',
                'subcategories'
            )
        );
    }


    // UPDATE PRODUCT

    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',

            'category_id' => 'required',

            'subcategory_id' => 'required',

            'description' => 'required',

            'price' => 'required',

            'quantity' => 'required',

            'status' => 'required',

             'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp',

        ]);


        $product = Product::findOrFail($id);


        $product->category_id = $request->category_id;

        $product->subcategory_id = $request->subcategory_id;

        $product->name = $request->name;

        $product->description = $request->description;

        $product->price = $request->price;

        $product->quantity = $request->quantity;

        $product->status = $request->status;


        // If new image is selected

        if ($request->hasFile('image')) {

            // Delete old image

            if ($product->image) {

                $oldpath = storage_path(
                    'app/public/products/' . $product->image
                );

                if (File::exists($oldpath)) {

                    File::delete($oldpath);
                }
            }


            // Upload new image

            $pic = $request
                ->file('image')
                ->store('products', 'public');

            $product->image = basename($pic);
        }


        $product->save();


        return redirect('/products');
    }


    // DELETE PRODUCT

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('/products');
    }
}