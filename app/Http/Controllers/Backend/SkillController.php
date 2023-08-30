<?php

namespace App\Http\Controllers\Backend;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Skill::all();
        return view('backend.skill.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'progres' => 'required',
            'description' => 'nullable',
        ]);

        // Create a new skill model instance and save it to the database
        Skill::create($validatedData);

        return redirect('admin/skill')->with('success', 'Data added successfully.');
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
        $data = Skill::findOrFail($id);
        // dd($data);
        return view('backend.skill.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'progres' => 'required',
            'description' => 'nullable',
        ]);

        // Find the skill model instance by ID
        $skill = Skill::findOrFail($id);

        // Update a new skill model instance and save it to the database
        $skill->update($validatedData);

        return redirect('admin/skill')->with('success', 'Data added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the skill model instance by ID and delete it
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect('admin/skill')->with('success', 'Data deleted successfully.');
    }
}
