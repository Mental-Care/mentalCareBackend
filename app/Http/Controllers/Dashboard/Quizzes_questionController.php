<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Quizzes_question;
use Illuminate\Http\Request;

class Quizzes_questionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes_questions = Quizzes_question::all();
        return view('dashboard.quizzes_questions.index', compact('quizzes_questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quizzes_question = new Quizzes_question();
        return view('dashboard.quizzes_questions.create', compact('quizzes_question'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Quizzes_question::rule());
        $quizzes_question = Quizzes_question::create([
            'quizze_id' => $request->quizze_id,
            'opt1' => $request->opt1,
            'opt2' => $request->opt2,
            'opt3' => $request->opt3,
            'opt4' => $request->opt4,
            'ans' => $request->ans,
        ]);
        return Redirect()->route('quizzes_questions.index')->with('success', 'Quizzes_question created!');
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
        $quizzes_question = Quizzes_question::where('id', $id)->first();
        return view('dashboard.quizzes_questions.edit', compact('quizzes_question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Quizzes_question::rule());
        $quizzes_question = Quizzes_question::where('id', $id)->first();

        $quizzes_question->update([
            'quizze_id' => $request->quizze_id,
            'opt1' => $request->opt1,
            'opt2' => $request->opt2,
            'opt3' => $request->opt3,
            'opt4' => $request->opt4,
            'ans' => $request->ans,
        ]);
        return Redirect()->route('quizzes_questions.index')->with('success', 'Quizzes_question updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $quizzes_question = Quizzes_question::findOrFail($id);
        $quizzes_question->delete();
        return redirect()->route('quizzes_questions.index')->with('success', 'Quizzes_question deleted!');
    }
}
