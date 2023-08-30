<?php

namespace App\Http\Controllers\Backend;

use App\Models\Resume;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resume = Resume::all();
        $education = Education::all();
        $experience = Experience::all();
        return view('backend.resume.index', compact('resume', 'education', 'experience'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function educationcreate()
    {
        return view('backend.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function educationstore(Request $request)
    {
        $name = $request->input('name');
        $title = $request->input('title');
        $start = $request->input('start');
        $end = $request->input('end_option') === 'Now' ? 'Now' : $request->input('end_date');
        $description = $request->input('edu_description');

        $simpan = DB::table('education')->insert([
                    'name' => $name,
                    'title' => $title,
                    'start' => $start,
                    'end' => $end,
                    'description' => $description,
            ]);

        if ($simpan) {
            return redirect('admin/resume')->with(['success' => 'Data added successfully.']);
        } else {
            return redirect('admin/resume/create')->with(['error' => 'Data added failed']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function educationedit(string $id)
    {
        $education = Education::findOrFail($id);
        return view('backend.resume.editEd', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function educationupdate(Request $request, $id)
    {
        $name = $request->input('name');
        $title = $request->input('title');
        $start = $request->input('start');
        $end_option = $request->input('end_option');
        $end = $end_option === 'Now' ? 'Now' : $request->input('end_date');
        $description = $request->input('edu_description');

        // Mengecek apakah entri pendidikan dengan ID yang diberikan ada dalam database
        $education = DB::table('education')->where('id', $id)->first();

        if (!$education) {
            return redirect('admin/resume')->with(['error' => 'Education not found.']);
        }

        // Mengupdate entri pendidikan yang ada dalam database
        $update = DB::table('education')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'title' => $title,
                'start' => $start,
                'end' => $end,
                'description' => $description,
            ]);

        if ($update) {
            return redirect('admin/resume')->with(['success' => 'Data updated successfully.']);
        } else {
            return redirect('admin/resume')->with(['error' => 'Data update failed.']);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function educationdestroy(string $id)
    {
        // Find the education model instance by ID and delete it
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect('admin/resume')->with('success', 'Data deleted successfully.');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function experiencecreate()
    {
        return view('backend.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function experiencestore(Request $request)
    {
        $name = $request->input('name');
        $title = $request->input('title');
        $start = $request->input('start');
        $end = $request->input('end_option') === 'Now' ? 'Now' : $request->input('end_date');
        $description = $request->input('exp_description');

        $simpan = DB::table('experiences')->insert([
                    'name' => $name,
                    'title' => $title,
                    'start' => $start,
                    'end' => $end,
                    'description' => $description,
            ]);

        if ($simpan) {
            return redirect('admin/resume')->with(['success' => 'Data added successfully.']);
        } else {
            return redirect('admin/resume/create')->with(['error' => 'Data added failed']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function experienceedit(string $id)
    {
        $experience = Experience::findOrFail($id);
        return view('backend.resume.editEx', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function experienceupdate(Request $request, string $id)
    {
        $name = $request->input('name');
        $title = $request->input('title');
        $start = $request->input('start');
        $end_option = $request->input('end_option');
        $end = $end_option === 'Now' ? 'Now' : $request->input('end_date');
        $description = $request->input('exp_description');

        // Mengecek apakah entri pendidikan dengan ID yang diberikan ada dalam database
        $experience = DB::table('experiences')->where('id', $id)->first();

        if (!$experience) {
            return redirect('admin/resume')->with(['error' => 'Experience not found.']);
        }

        // Mengupdate entri pendidikan yang ada dalam database
        $update = DB::table('experiences')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'title' => $title,
                'start' => $start,
                'end' => $end,
                'description' => $description,
            ]);

        if ($update) {
            return redirect('admin/resume')->with(['success' => 'Data updated successfully.']);
        } else {
            return redirect('admin/resume')->with(['error' => 'Data update failed.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function experiencedestroy(string $id)
    {
        // Find the experience model instance by ID and delete it
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return redirect('admin/resume')->with('success', 'Data deleted successfully.');
    }
}
