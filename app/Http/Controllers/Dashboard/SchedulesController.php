<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Schedules;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedules::all();
        return view('dashboard.schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schedule = new Schedules();
        return view('dashboard.schedules.create', compact('schedule'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Schedules::rule());
        $schedule = Schedules::create([
            'user_id' => $request->user_id,
            'date' => $request->date,
        ]);
        return Redirect()->route('schedules.index')->with('success', 'Schedule created!');
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
        $schedule = Schedules::where('id', $id)->first();
        return view('dashboard.schedules.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Schedules::rule());
        $schedule = Schedules::where('id', $id)->first();

        $schedule->update([
            'user_id' => $request->user_id,
            'date' => $request->date,
        ]);
        return Redirect()->route('schedules.index')->with('success', 'Schedule updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $schedule = Schedules::findOrFail($id);
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted!');
    }
}
