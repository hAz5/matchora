<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::getNotDone()->take(10)->get();
        $oldMatches = Match::getDone()->take(10)->get();

        return view('home', compact('matches', 'oldMatches'));
    }
}
