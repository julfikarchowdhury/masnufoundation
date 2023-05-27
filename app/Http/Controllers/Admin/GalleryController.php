<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::all();
        return view('admin.front_page_customization.gallery.index', compact('gallerys'));
    }

    public function create()
    {
        return view('admin.front_page_customization.gallery.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
        ]);

        $gallery = new Gallery();
        $gallery->name = $validatedData['name'];
        $gallery->description = $validatedData['description'];
        
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('front/images/gallery'), $imageName);
                $images[] = $imageName;
            }
            $gallery->images = json_encode($images); // Convert the array to a JSON string
        }
        $gallery->status = $validatedData['status'];

        $gallery->save();
        

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.front_page_customization.gallery.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.front_page_customization.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->name = $validatedData['name'];
        $gallery->description = $validatedData['description'];

        $imagePaths = $gallery->images ?? [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('gallery', 'public');
                $imagePaths[] = $imagePath;
            }
        }

        $gallery->images = $imagePaths;
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        foreach ($gallery->images as $image) {
            Storage::disk('public')->delete($image);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
