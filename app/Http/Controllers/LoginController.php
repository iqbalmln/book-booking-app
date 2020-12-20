<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the login page.
     * 
     * @return View
     */
    public function index()
    {
        return view('auth.login');
    }
}
