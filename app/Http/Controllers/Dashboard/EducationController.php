<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Educations;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Educations::all();
        return view('dashboard.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $education = new Educations();
        return view('dashboard.educations.create', compact('education'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Educations::rule());
        $education = Educations::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'place' => $request->place,
            'fromDate' => $request->fromDate,
            'toDate' => $request->toDate,
        ]);
        return Redirect()->route('educations.index')->with('success', 'Education created!');
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
        $education = Educations::where('id', $id)->first();
        return view('dashboard.educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Educations::rule());
        $education = Educations::where('id', $id)->first();

        $education->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'place' => $request->place,
            'fromDate' => $request->fromDate,
            'toDate' => $request->toDate,
        ]);
        return Redirect()->route('educations.index')->with('success', 'Education updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $education = Educations::findOrFail($id);
        $education->delete();
        return redirect()->route('educations.index')->with('success', 'Education deleted!');
    }
}
