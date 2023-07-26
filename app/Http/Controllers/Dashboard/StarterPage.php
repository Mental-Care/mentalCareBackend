<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Therapist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StarterPage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::count();
        $therapists = Therapist::count();
        $patients = User::where('role', 'user')->count();
        // Get the current date and time
        $now = Carbon::now();
        // Calculate the date one week ago from the current date
        $oneWeekAgo = $now->subWeek();
        // Get all new users created in the past one week or less
        $newUsers = User::where('created_at', '>=', $oneWeekAgo)->count();
        return view('dashboard.index', compact(['users', 'therapists', 'newUsers', 'patients']));
    }
}
