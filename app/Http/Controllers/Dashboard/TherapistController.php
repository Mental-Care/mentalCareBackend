<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Models\Specialty;
use App\Models\Therapist;
use App\Models\User;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $therapists = Therapist::paginate(5);
        return view('dashboard.therapists.index', compact('therapists'));
        //return $interests;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $therapist = new Therapist();
        $specialties = Specialty::where('parent_id', null)->get();
        $subSpecialties = Specialty::whereNotNull('parent_id')->get();
        $interests = Interest::all();
        return view('dashboard.therapists.create', compact(['therapist', 'specialties', 'subSpecialties', 'interests']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate(Therapist::rule());
        $request->validate(User::rule());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'role' => 'therapist',
            'gender' => $request->gender,
            'date' => $request->date,
            'number' => $request->number,
        ]);

        $image = $this->uploadImage($request);
        $therapist = Therapist::create([
            'user_id' => $user->id,
            'specialty_id' => $request->specialty_id,
            'subSpecialty_id' => $request->subSpecialty_id,
            'interests_id' => $request->interests_id,
            'language' => $request->language,
            'country' => $request->country,
            'address' => $request->address,
            'sessions' => $request->sessions,
            'rate' => $request->rate,
            'review' => $request->review,
            'communicationSkills' => $request->communicationSkills,
            'effectiveSolutions' => $request->effectiveSolutions,
            'understandSituation' => $request->understandSituation,
            'CommitmentSessionDates' => $request->CommitmentSessionDates,
            'date' => $request->date,
            'time' => $request->time,
            'price_60' => $request->price_60,
            'price_30' => $request->price_30,
            'isPsychotherapy' => $request->isPsychotherapy,
            'Connected' => $request->Connected,
            'isBestTherapist' => $request->isBestTherapist,
            'image' => $image,
        ]);

        return Redirect()->route('therapists.index')->with('success', 'Therapists created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Therapist $therapists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $therapist = Therapist::where('id', $id)->first();
        $specialties = Specialty::where('parent_id', null)->get();
        $subSpecialties = Specialty::whereNotNull('parent_id')->get();
        $interests = Interest::all();
        return view('dashboard.therapists.edit', compact(['therapist', 'specialties', 'subSpecialties', 'interests']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $therapist = Therapist::where('id', $id)->first();
        $user = User::where('id', $therapist->user_id)->first();

        $request->validate(Therapist::rule());
        $request->validate(User::rule());

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'role' => 'therapist',
            'gender' => $request->gender,
            'date' => $request->date,
            'image' => $request->image,
            'number' => $request->number,
        ]);
        $therapist->update([
            'user_id' => $user->id,
            'specialty_id' => $request->specialty_id,
            'subSpecialty_id' => $request->subSpecialty_id,
            'interests_id' => $request->interests_id,
            'language' => $request->language,
            'country' => $request->country,
            'address' => $request->address,
            'sessions' => $request->sessions,
            'rate' => $request->rate,
            'review' => $request->review,
            'communicationSkills' => $request->communicationSkills,
            'effectiveSolutions' => $request->effectiveSolutions,
            'understandSituation' => $request->understandSituation,
            'CommitmentSessionDates' => $request->CommitmentSessionDates,
            'date' => $request->date,
            'time' => $request->time,
            'price_60' => $request->price_60,
            'price_30' => $request->price_30,
            'isPsychotherapy' => $request->isPsychotherapy,
            'Connected' => $request->Connected,
            'isBestTherapist' => $request->isBestTherapist,
        ]);
        return redirect()->route('therapists.index')->with('success', 'Therapists updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $therapist = Therapist::findOrFail($id);
        $user = User::findOrFail($therapist->user_id);
        $therapist->delete();
        $user->delete();
        return redirect()->route('therapists.index')->with('success', 'Therapists deleted!');
    }

    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return;
        }
        $file = $request->file('image');
        $filename = rand() . time() . '_' . $file->getClientOriginalName();
        // $file->store('uploads', [
        //     'disk' => 'public',
        //     $filename
        // ]);
        $file->move(public_path('uploads'), $filename);
        /*  $request->merge([
            'image' => $path,
        ]); */
        return $filename;
    }
}
