<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        // Creae and save the user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        // Sign them in
        auth()->login($user);

        // Redirect to the home
        return redirect()->home();
    }
}
