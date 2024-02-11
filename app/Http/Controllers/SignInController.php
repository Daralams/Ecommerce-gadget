<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function signIn () {
      return view('auth.sign-in', [
        "title" => "Sign In"
        ]);
    }
}
