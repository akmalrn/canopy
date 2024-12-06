<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::all();
        return view('backend.pricing.index', compact('pricings'));
    }

    public function create()
    {
        return view('backend.pricing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'overview' => 'required|',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/pricings'), $imageName);
            $path = 'uploads/pricings/' . $imageName;

            Pricing::create([
                'title' => $request->title,
                'price' => $request->price,
                'superiority' => $request->superiority,
                'path' => $path
            ]);
        }

        return redirect()->route('pricings.index')->with('success', 'Data saved successfully.');
    }

    public function edit($id)
    {
        $pricing = Pricing::findOrFail($id);
        return view('backend.pricing.edit', compact('pricing'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'nullable',
            'title' => 'nullable|required|string|max:255',
            'description' => 'nullable|required|string',
            'overview' => 'nullable|',
        ]);

        $data = Pricing::findOrFail($id);

        if ($request->hasFile('path')) {
            $oldPath = public_path('uploads/pricings/' . $data->path);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }

            $image = $request->file('path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/pricings'), $imageName);
            $data->path = 'uploads/pricings/' . $imageName;
            $data->save();
        }


        $data->update([
            'title' => $request->title,
            'description' => $request->description,
            'overview' =>  $request->overview,
        ]);

        return redirect()->route('pricings.index')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $data = Pricing::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
