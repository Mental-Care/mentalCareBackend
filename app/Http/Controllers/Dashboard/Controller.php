<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Feedbacks;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedbacks::all();
        return view('dashboard.feedbacks.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $feedback = new Feedbacks();
        return view('dashboard.feedbacks.create', compact('feedback'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Feedbacks::rule());
        $feedback = Feedbacks::create([
            'user_id' => $request->user_id,
            'therapist_id' => $request->therapist_id,
            'rate' => $request->rate,
            'text' => $request->text,
            'date' => $request->date,
        ]);
        return Redirect()->route('feedbacks.index')->with('success', 'Feedback created!');
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
        $feedback = Feedbacks::where('id', $id)->first();
        return view('dashboard.feedbacks.edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Feedbacks::rule());
        $feedback = Feedbacks::where('id', $id)->first();

        $feedback->update([
            'user_id' => $request->user_id,
            'therapist_id' => $request->therapist_id,
            'rate' => $request->rate,
            'text' => $request->text,
            'date' => $request->date,
        ]);
        return Redirect()->route('feedbacks.index')->with('success', 'Feedback updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $feedback = Feedbacks::findOrFail($id);
        $feedback->delete();
        return redirect()->route('feedbacks.index')->with('success', 'Feedback deleted!');
    }
}
