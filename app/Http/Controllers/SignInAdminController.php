<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class SignInAdminController extends Controller
{
    public function signInView () {
      return view('admin.auth.signIn', [
        "title" => "Sign In | Admin"
        ]);
    }
    
    public function authenticate (Request $request) {
      
      $credentials = $request->validate([
        "firstname" => ['required'],
        "password" => ['required','min:8'],
        ]);
        
        if(Auth::attempt($credentials)) {
          //regenerate session
          $request->session()->regenerate();
          return redirect()->intended('/dashboard-admin');
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
