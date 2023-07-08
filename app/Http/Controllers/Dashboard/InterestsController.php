<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Interests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InterestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interests = Interests::all();
        return view('dashboard.interests.index', compact('interests'));
        //return $interests;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $interest = new Interests();
        return view('dashboard.interests.create', compact('interest'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Interests::rule());

        $interest = Interests::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
        ]);
        return Redirect()->route('interests.index')->with('success', 'Interests created!');
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
        $interest = Interests::where('id', $id)->first();
        return view('dashboard.interests.edit', compact('interest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $interest = Interests::where('id', $id)->first();
        $request->validate(Interests::rule());
        $interest->update([
            'name' => $request->name,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('interests.index')->with('success', 'Interests updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $interest = Interests::findOrFail($id);
        $interest->delete();
        return redirect()->route('interests.index')->with('success', 'Interests deleted!');
    }
}
