<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('backend.contact.index', compact('contact'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'path' => 'nullable',
            'path' => 'nullable',
            'name' => 'nullable',
            'position' => 'nullable',
            'phone_number' => 'nullable|string|max:15',
            'phone_number_2' => 'nullable|string|max:15',
            'email_address' => 'nullable|email|max:255',
            'email_address_2' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
            'map' => 'nullable|string|max:1000',
            'hours' => 'nullable|string|max:255',
            'instagram' => 'nullable|url|max:255',
            'tiktok' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
        ]);

        $data = [
            'phone_number' => $request->input('phone_number'),
            'phone_number_2' => $request->input('phone_number_2'),
            'email_address' => $request->input('email_address'),
            'email_address_2' => $request->input('email_address_2'),
            'address' => $request->input('address'),
            'map' => $request->input('map'),
            'hours' => $request->input('hours'),
            'instagram' => $request->input('instagram'),
            'tiktok' => $request->input('tiktok'),
            'facebook' => $request->input('facebook'),
        ];

        if ($request->hasFile('path')) {
            $oldPath = Contact::find(1)->path ?? null;
            if ($oldPath && File::exists(($oldPath))) {
                File::delete(($oldPath));
            }

            $image = $request->file('path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = ('uploads/contact');
            $image->move($destinationPath, $imageName);

            $data['path'] = 'uploads/contact/' . $imageName;
        }

        if ($request->hasFile('path_contact')) {
            $oldpath_contact = Contact::find(1)->path_contact ?? null;
            if ($oldpath_contact && File::exists(($oldpath_contact))) {
                File::delete(($oldpath_contact));
            }

            $image = $request->file('path_contact');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationpath_contact = ('uploads/contact');
            $image->move($destinationpath_contact, $imageName);

            $data['path_contact'] = 'uploads/contact/' . $imageName;
        }

        Contact::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Configuration has been successfully saved or updated.');
    }
}
