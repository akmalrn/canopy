<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryServiceController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('backend.service.category.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'path' => 'required',
        ]);

        $imagePath = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/services'), $imageName);
            $imagePath = 'uploads/services/' . $imageName;
        }

        CategoryService::create([
            'category' => $request->category,
            'path' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Category added successfully.');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $categoryservice = CategoryService::findOrFail($id);
        return view('backend.service.category.edit', compact('categoryservice', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255,' . $id,
            'path' => 'nullable',
        ]);

        $categoryservices = CategoryService::findOrFail($id);

        if ($request->hasFile('path')) {
            $existingImagePath = public_path('uploads/services/' . $categoryservices->path);
            if (file_exists($existingImagePath) && $categoryservices->path) {
                unlink($existingImagePath);
            }

            $image = $request->file('path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/services'), $imageName);

            $categoryservices->path = 'uploads/services/' . $imageName;
        }

        $categoryservices->update([
            'category' => $request->category,
            'path' => $categoryservices->path, 
        ]);

        return redirect()->route('services.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $categoryservices = CategoryService::findOrFail($id);
        $categoryservices->delete();

        return redirect()->route('services.index')->with('success', 'Category successfully deleted.');
    }
}
