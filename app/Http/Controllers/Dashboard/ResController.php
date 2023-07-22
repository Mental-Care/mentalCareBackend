<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Res;
use Illuminate\Http\Request;

class ResController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $res = Res::all();
        return view('dashboard.res.index', compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $res = new Res();
        return view('dashboard.res.create', compact('res'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Res::rule());
        $res = Res::create([
            'name' => $request->name,
        ]);
        return Redirect()->route('res.index')->with('success', 'Res created!');
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
        $res = Res::where('id', $id)->first();
        return view('dashboard.res.edit', compact('res'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(Res::rule());
        $res = Res::where('id', $id)->first();

        $res->update([
            'name' => $request->name,
        ]);
        return Redirect()->route('res.index')->with('success', 'Res updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $res = Res::findOrFail($id);
        $res->delete();
        return redirect()->route('res.index')->with('success', 'Res deleted!');
    }
}
