<?php

namespace App\Http\Controllers\Backend;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('backend.portfolio.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolio.create');
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
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = now()->format('Ymd') . '_' . $image->getClientOriginalName(); // Format nama sesuai permintaan
            $image->storeAs('public/uploads/portfolio', $imageName); // Store the image in the public/uploads/portfolio directory
            $validatedData['image'] = $imageName; // Set the image field in the database to the image filename
        }
        // dd($validatedData);

        // Create a new portfolio model instance and save it to the database
        Portfolio::create($validatedData);

        return redirect('admin/portfolio')->with('success', 'Data added successfully.');
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
    public function edit(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            'description' => 'nullable',
        ]);

        // Find the portfolio model instance by ID
        $portfolio = Portfolio::findOrFail($id);

        // Get the old image filename from the database
        $oldImage = $portfolio->image;

        // Handle image upload only if a new image is provided
        if ($request->hasFile('image')) {
            // Upload the new image
            $image = $request->file('image');
            $imageName = now()->format('Ymd') . '_' . $image->getClientOriginalName();
            $image->storeAs('public/uploads/portfolio', $imageName);

            // Set the new image filename in the validated data
            $validatedData['image'] = $imageName;

            // Delete the old image if it's different from the new one
            if ($oldImage !== $validatedData['image']) {
                Storage::delete('public/uploads/portfolio/' . $oldImage);
            }
        } else {
            // If no new image is provided, use the old image filename
            $validatedData['image'] = $oldImage;
        }
        // dd($validatedData);

        // Update a new portfolio model instance and save it to the database
        $portfolio->update($validatedData);

        return redirect('admin/portfolio')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the portfolio model instance by ID and delete it
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect('admin/portfolio')->with('success', 'Data deleted successfully.');
    }
}
