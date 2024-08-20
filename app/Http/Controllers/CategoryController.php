<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index() {
        $categories = Category::get();
        return view('index', compact('categories'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'is_active' => '',
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect('category/create')->with('status','Category added successfully');
    }

    public function edit(int $id) {
        $category = Category::findOrFail($id);
       //return $category;
        return view('edit', compact('category'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'is_active' => '',
        ]);

        Category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect()->back()->with('status','Category updated successfully');
    }

}
