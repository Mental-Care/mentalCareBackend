<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blogs::all();
        return view('dashboard.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog = new Blogs();
        return view('dashboard.blogs.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Blogs::rule());
        $cover = $this->uploadImage($request);
        $blog = Blogs::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'categoryBlogs_id' => $request->categoryBlogs_id,
            'subCategoryBlogs_id' => $request->subCategoryBlogs_id,
            'description' => $request->description,
            'cover' => $cover,
        ]);
        return Redirect()->route('blogs.index')->with('success', 'Blog created!');
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
        $blog = Blogs::where('id', $id)->first();
        return view('dashboard.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Blogs::rule());
        $blog = Blogs::where('id', $id)->first();
        $cover = $this->uploadImage($request);
        $blog->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'categoryBlogs_id' => $request->categoryBlogs_id,
            'subCategoryBlogs_id' => $request->subCategoryBlogs_id,
            'description' => $request->description,
            'cover' => $cover,
        ]);
        return Redirect()->route('blogs.index')->with('success', 'Blog updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted!');
    }
    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('cover')) {
            return;
        }
        $file = $request->file('cover');
        $filename = rand() . time() . '_' . $file->getClientOriginalName();
        // $file->store('uploads', [
        //     'disk' => 'public',
        //     $filename
        // ]);
        $file->move(public_path('uploads/blogs'), $filename);
        /*  $request->merge([
            'cover' => $path,
        ]); */
        return $filename;
    }
}
