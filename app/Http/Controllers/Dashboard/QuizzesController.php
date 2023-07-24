<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Quizzes;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quizzes::all();
        return view('dashboard.quizzes.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quiz = new Quizzes();
        return view('dashboard.quizzes.create', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Quizzes::rule());
        $quiz = Quizzes::create([
            'name' => $request->name,
            'duration' => $request->duration,
        ]);
        return Redirect()->route('quizzes.index')->with('success', 'Quiz created!');
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
        $quiz = Quizzes::where('id', $id)->first();
        return view('dashboard.quizzes.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Quizzes::rule());
        $quiz = Quizzes::where('id', $id)->first();

        $quiz->update([
            'name' => $request->name,
            'duration' => $request->duration,
        ]);
        return Redirect()->route('quizzes.index')->with('success', 'Quiz updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $quiz = Quizzes::findOrFail($id);
        $quiz->delete();
        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted!');
    }
}
