<?php

namespace App\Http\Controllers\Admin;

use App\Match;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatchController extends Controller
{

    public function index()
    {
        $matches =  Match::all();

        return view('admin.match.index', compact('matches'));
    }

    public function store(Request $request)
    {
        $match = Match::create($request->all());

        return $match->toArray();
    }

    public function update(Request $request, Match $match)
    {

        $match->update($request->except([Match::ID]));

        return $match->toArray();
    }

    /**
     * @param Match $match
     *
     * @return array
     * @throws \Exception
     */
    public function destroy(Match $match)
    {
        $match->delete();

        return $match->toArray();
    }
}
