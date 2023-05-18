<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    //This method shows the home page
    public function home()
    {
        return view('base.home');
    }

    // This controller checks the user role
    // Redirects to the dashboard using the role type
    public function redirect()
    {
        $role = Auth::user()->role;

        if ($role == 1) {
            return view('admin.home');
        }

        return view('dashboard');
        
    }
}
