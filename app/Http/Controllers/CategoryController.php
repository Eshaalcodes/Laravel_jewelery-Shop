<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Show categories
    public function index()
    {
        $categories = Category::all();

        return view('Admin.index', compact('categories'));
    }

    // Show add category page
    public function create()
    {
        return view('Admin.create');
    }

    // Save category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('category.index');
    }

    // Show edit page
    public function edit($id)
    {
        $category = Category::find($id);

        return view('Admin.edit', compact('category'));
    }

    // Update category
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::find($id);

        $category->name = $request->name;

        $category->save();

        return redirect()->route('category.index');
    }

    // Delete category
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('category.index');
    }
}