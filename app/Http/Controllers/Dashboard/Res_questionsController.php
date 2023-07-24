<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Res_questions;
use Illuminate\Http\Request;

class Res_questionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $res_questions = Res_questions::all();
        return view('dashboard.res_questions.index', compact('res_questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $res_question = new Res_questions();
        return view('dashboard.res_questions.create', compact('res_question'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Res_questions::rule());
        $res_question = Res_questions::create([
            'res_id' => $request->res_id,
            'question' => $request->question,
            'opt1' => $request->opt1,
            'opt2' => $request->opt2,
            'opt3' => $request->opt3,
        ]);
        return Redirect()->route('res_questions.index')->with('success', 'Res_question created!');
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
        $res_question = Res_questions::where('id', $id)->first();
        return view('dashboard.res_questions.edit', compact('res_question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Res_questions::rule());
        $res_question = Res_questions::where('id', $id)->first();

        $res_question->update([
            'res_id' => $request->res_id,
            'question' => $request->question,
            'opt1' => $request->opt1,
            'opt2' => $request->opt2,
            'opt3' => $request->opt3,
        ]);
        return Redirect()->route('res_questions.index')->with('success', 'Res_question updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $res_question = Res_questions::findOrFail($id);
        $res_question->delete();
        return redirect()->route('res_questions.index')->with('success', 'Res_question deleted!');
    }
}
