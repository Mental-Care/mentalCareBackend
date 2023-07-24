<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faqs::all();
        return view('dashboard.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faq = new Faqs();
        return view('dashboard.faqs.create', compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Faqs::rule());
        $faq = Faqs::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return Redirect()->route('faqs.index')->with('success', 'Faqs created!');
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
        $faq = Faqs::where('id', $id)->first();
        return view('dashboard.faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Faqs::rule());
        $faq = Faqs::where('id', $id)->first();

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return Redirect()->route('faqs.index')->with('success', 'Faqs updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faq = Faqs::findOrFail($id);
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'Faqs deleted!');
    }
}
