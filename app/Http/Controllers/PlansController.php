<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plan::active()->get();

        return view('user.plans', compact('plans'));
    }

    public function reserve(Plan $plan)
    {
        return view('user.plans.reserve', compact('plan'));
    }
}
