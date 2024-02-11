<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function signIn () {
      return view('auth.sign-in', [
        "title" => "Sign In"
        ]);
    }
    
    public function authenticate (Request $request) {
      
      $credentials = $request->validate([
        "email" => ['required','email:dns'],
        "password" => ['required','min:8'],
        ]);
        
        if(Auth::attempt($credentials)) {
          //regenerate session
          $request->session()->regenerate();
          return redirect()->intended('/products');
        }
        
        return back()->with('signInError', 'Sign In Failed!');
    }
    
    public function signOut (Request $request) {
      
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
      
    }
}
