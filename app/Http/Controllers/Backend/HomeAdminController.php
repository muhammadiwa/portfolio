<?php

namespace App\Http\Controllers\Backend;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class HomeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Home::all(); // Retrieve all records from the Home model
        // dd($data);
        return view('backend.home.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'github' => 'nullable',
            'facebook' => 'nullable',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = now()->format('Ymd') . '_' . $image->getClientOriginalName(); // Format nama sesuai permintaan
            $image->storeAs('public/uploads/home', $imageName); // Store the image in the public/uploads/home directory
            $validatedData['image'] = $imageName; // Set the image field in the database to the image filename
        }
        // dd($validatedData);

        // Create a new Home model instance and save it to the database
        Home::create($validatedData);

        return redirect('admin/home')->with('success', 'Data added successfully.');

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
    public function edit($id)
    {
        $data = Home::findOrFail($id);
        return view('backend.home.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'github' => 'nullable|url',
            'facebook' => 'nullable|url',
        ]);

        // Find the Home model instance by ID
        $home = Home::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = now()->format('Ymd') . '_' . $image->getClientOriginalName();
            $image->storeAs('public/uploads/home', $imageName);
            $validatedData['image'] = $imageName;
        }

        // Update the Home model instance with the new data
        $home->update($validatedData);

        return redirect('admin/home')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        // Find the Home model instance by ID and delete it
        $home = Home::findOrFail($id);
        $home->delete();

        return redirect('admin/home')->with('success', 'Data deleted successfully.');
    }
}
