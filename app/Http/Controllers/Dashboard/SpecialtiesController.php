<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Interests;
use App\Http\Controllers\Controller;
use App\Models\Specialties;
use Illuminate\Http\Request;

class SpecialtiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialties = Specialties::all();
        return view('dashboard.specialties.index', compact('specialties'));
        //return $interests;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialty = new Specialties();
        $parents = Specialties::all();
        return view('dashboard.specialties.create', compact(['specialty', 'parents']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Specialties::rule());

        $specialty = Specialties::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);
        return Redirect()->route('specialties.index')->with('success', 'Specialties created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Interests $interests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $specialty = Specialties::where('id', $id)->first();
        $parents = Specialties::all()->except($id);
        return view('dashboard.specialties.edit', compact(['specialty', 'parents']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $specialty = Specialties::where('id', $id)->first();
        $request->validate(Specialties::rule());
        $specialty->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);
        return redirect()->route('specialties.index')->with('success', 'Specialties updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $specialty = Specialties::findOrFail($id);
        $specialty->delete();
        return redirect()->route('specialties.index')->with('success', 'Specialties deleted!');
    }
}
