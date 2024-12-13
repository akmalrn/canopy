<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\admin\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $aboutus = AboutUs::first();
        return view('backend.about-us.index', compact('user', 'aboutus'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'title' => 'nullable|string',
            'overview' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $data = [
            'title' => $request->input('title'),
            'overview' => $request->input('overview'),
            'description' => $request->input('description'),
        ];

        if ($request->hasFile('path')) {
            $oldPath = AboutUs::find(1)->path ?? null;
            if ($oldPath && File::exists(($oldPath))) {
                File::delete(($oldPath));
            }

            $image = $request->file('path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = ('uploads/aboutus');
            $image->move($destinationPath, $imageName);

            $data['path'] = 'uploads/aboutus/' . $imageName;
        }

        AboutUs::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'AboutUs has been successfully saved or updated.');
    }
}
