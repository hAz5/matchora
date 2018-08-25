<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    public function todayMatch()
    {
        $matches = Match::getNotDone()->todayMatch()->paginate(20);

        return view('');
    }
}
