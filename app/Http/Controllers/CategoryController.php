<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $categories)
    {
        $categories = Category::paginate(5);
        return view('configurations/categories/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('configurations.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:5']
        ]);
        
        
        Category::create($request->post());

        return redirect()->route('categories.index')->with('success','Category has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // dd($id);
        return view('configurations.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:5']
        ]);
        
        $category->fill($request->post())->save();

        return redirect()->route('categories.index')->with('success','Category Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success','Category has been deleted successfully');
    }
}
