<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
    public function signUp () {
      return view('auth.sign-up', [
        "title" => "Sign Up"
        ]);
    }
    
    public function store (Request $request) {
      $validated = $request->validate([
        'firstname' => 'required|max:255',
        'lastname' => 'required|max:255',
        'gender' => 'required|max:255',
        'country' => 'required|max:255',
        'email' => 'required|email:dns|unique:users|max:255',
        'password' => 'required|min:8',
        'phone_number' => 'required|min:10',
        'address' => 'required'
        ]);
        // insert new user
        User::create($validated);
        $request->session()->flash('success', 'Sign Up success, please sign in');
        return redirect('/sign-in');
    }
}
