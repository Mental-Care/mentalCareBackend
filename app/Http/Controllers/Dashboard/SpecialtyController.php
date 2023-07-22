<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialties = Specialty::all();
        return view('dashboard.specialties.index', compact('specialties'));
        //return $interests;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialty = new Specialty();
        $parents = Specialty::all();
        return view('dashboard.specialties.create', compact(['specialty', 'parents']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Specialty::rule());

        $specialty = Specialty::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);
        return Redirect()->route('specialties.index')->with('success', 'Specialty created!');
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
        $specialty = Specialty::where('id', $id)->first();
        $parents = Specialty::all()->except($id);
        return view('dashboard.specialties.edit', compact(['specialty', 'parents']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $specialty = Specialty::where('id', $id)->first();
        $request->validate(Specialty::rule());
        $specialty->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);
        return redirect()->route('specialties.index')->with('success', 'Specialty updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $specialty = Specialty::findOrFail($id);
        $specialty->delete();
        return redirect()->route('specialties.index')->with('success', 'Specialty deleted!');
    }
}
