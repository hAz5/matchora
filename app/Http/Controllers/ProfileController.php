<?php

namespace App\Http\Controllers;

use App\User\ProfileForm;
use Kris\LaravelFormBuilder\FormBuilder;

class ProfileController extends Controller
{
    public function profile(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ProfileForm::class, [
            'method' => 'POST',
            'url' => ''
        ],[
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ]);
        return view('user.profile', compact('form'));
    }
}
