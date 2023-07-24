<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('dashboard.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $experience = new Experience();
        return view('dashboard.experiences.create', compact('experience'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Experience::rule());
        $experience = Experience::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'place' => $request->place,
            'fromDate' => $request->fromDate,
            'toDate' => $request->toDate,
        ]);
        return Redirect()->route('experiences.index')->with('success', 'Experience created!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $experience = Experience::where('id', $id)->first();
        return view('dashboard.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Experience::rule());
        $experience = Experience::where('id', $id)->first();

        $experience->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'place' => $request->place,
            'fromDate' => $request->fromDate,
            'toDate' => $request->toDate,
        ]);
        return Redirect()->route('experiences.index')->with('success', 'Experience updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return redirect()->route('experiences.index')->with('success', 'Experience deleted!');
    }
}
