<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::all();
        return view('backend.about.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            'description' => 'nullable',
            'description2' => 'nullable',
            'description3' => 'nullable',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = now()->format('Ymd') . '_' . $image->getClientOriginalName(); // Format nama sesuai permintaan
            $image->storeAs('public/uploads/about', $imageName); // Store the image in the public/uploads/about directory
            $validatedData['image'] = $imageName; // Set the image field in the database to the image filename
        }
        // dd($validatedData);

        // Create a new about model instance and save it to the database
        About::create($validatedData);

        return redirect('admin/about')->with('success', 'Data added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = About::findOrFail($id);
        return view('backend.about.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            'description' => 'nullable',
            'description2' => 'nullable',
            'description3' => 'nullable',
        ]);

        // Find the about model instance by ID
        $about = About::findOrFail($id);

        // Get the old image filename from the database
        $oldImage = $about->image;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = now()->format('Ymd') . '_' . $image->getClientOriginalName();
            $image->storeAs('public/uploads/about', $imageName);
            $validatedData['image'] = $imageName;
        } else {
            // If no new image is provided, use the old image filename
            $validatedData['image'] = $oldImage;
        }
        // dd($validatedData);

        // Update a new about model instance and save it to the database
        $about->update($validatedData);

        // Delete the old image if it's different from the new one
        if ($oldImage !== $validatedData['image']) {
            Storage::delete('public/uploads/about/' . $oldImage);
        }

        return redirect('admin/about')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the about model instance by ID and delete it
        $about = About::findOrFail($id);
        $about->delete();

        return redirect('admin/about')->with('success', 'Data deleted successfully.');
    }
}
