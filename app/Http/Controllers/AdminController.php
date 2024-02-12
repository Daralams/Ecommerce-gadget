<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminRoute() {
      return view('pages.dashboard-admin', [
        "title" => "Dashboard | Admin"
        ]);
    }
}
