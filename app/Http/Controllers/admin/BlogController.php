<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use App\Models\admin\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categoryblogs = CategoryBlog::all();
        $blogs = Blog::with('category')->get();
        return view('backend.blog.index', compact('user', 'categoryblogs', 'blogs'));
    }

    public function create()
    {
        $user = Auth::user();
        $categoryblog = CategoryBlog::all();
        return view('backend.blog.create', compact('categoryblog', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
            'keywords' => 'required|string',
            'descriptions' => 'required|string',
            'category_id' => 'required|exists:category_blogs,id',
            'path' => 'required|image|mimes:jpg,jpeg,png,webp|max:8192',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/blogs'), $imageName);
        }

        Blog::create([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'descriptions' => $request->descriptions,
            'category_id' => $request->category_id,
            'path' => 'uploads/blogs/' . $imageName ?? null,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $user = Auth::user();
        $categoryblogs = CategoryBlog::all();
        return view('backend.blog.edit', compact('user', 'categoryblogs', 'blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
            'keywords' => 'required|string',
            'descriptions' => 'required|string',
            'category_id' => 'required|exists:category_blogs,id',
            'path' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:8192',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('path')) {
            $existingImagePath = ('uploads/blogs/' . $blog->path);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }

            $image = $request->file('path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(('uploads/blogs'), $imageName);
            $blog->path = 'uploads/blogs/' . $imageName;
        }

        $blog->update([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'descriptions' => $request->descriptions,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->path) {
            $imagePath = ($blog->path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
