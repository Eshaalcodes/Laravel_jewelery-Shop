<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::all();

        return view('subcategories.index', compact('subCategories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('subcategories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);

        SubCategory::create([
            'name' => $request->name,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('subcategories.index');
    }

    public function edit($id)
    {
        $subCategory = SubCategory::find($id);

        $categories = Category::all();

        return view('subcategories.edit', compact(
            'subCategory',
            'categories'
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);

        $subCategory = SubCategory::find($id);

        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category_id;

        $subCategory->save();

        return redirect()->route('subcategories.index');
    }

    public function destroy($id)
    {
        $subCategory = SubCategory::find($id);

        $subCategory->delete();

        return redirect()->route('subcategories.index');
    }
}
