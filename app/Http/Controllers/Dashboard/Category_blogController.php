<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category_blogs;
use Illuminate\Http\Request;

class Category_blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_blogs = Category_blogs::all();
        return view('dashboard.category_blogs.index', compact('category_blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category_blog = new Category_blogs();
        return view('dashboard.category_blogs.create', compact('category_blog'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Category_blogs::rule());
        $category_blog = Category_blogs::create([
            'name' => $request->name,
        ]);
        return Redirect()->route('category_blogs.index')->with('success', 'Category_blog created!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category_blog = Category_blogs::where('id', $id)->first();
        return view('dashboard.category_blogs.edit', compact('category_blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Category_blogs::rule());
        $category_blog = Category_blogs::where('id', $id)->first();

        $category_blog->update([
            'name' => $request->name,
        ]);
        return Redirect()->route('category_blogs.index')->with('success', 'Category_blog updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category_blog = Category_blogs::findOrFail($id);
        $category_blog->delete();
        return redirect()->route('category_blogs.index')->with('success', 'Category_blog deleted!');
    }
}
