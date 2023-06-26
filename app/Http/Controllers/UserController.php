<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register/create form
    public function create() {
        return view('users.register');
    }

    //create new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'name'=>['required', 'min:6'],
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8'
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);

        //log in
        auth()->login($user);

        return redirect('/')->with('success','user created and logged in');
    }

    //log out user
    public function logout(Request $request) {
        auth()->logout();

        // invalidate session and regenerate token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out!!');
    }

    //show login form
    public function login() {
        return view('users.login');
    }

    //authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'name'=> 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('success','You are now logged in!!');
        }

        //else if wrong
        return back()->withErrors(['name' => 'Invalid credentials'])->onlyInput('name');

    }
}
