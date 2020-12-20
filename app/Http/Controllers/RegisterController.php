<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Show the register page.
     * 
     * @return View
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Store the new user to database.
     * 
     * @return Redirect
     */
    public function register(Request $request)
    {
        // dd($request->all());
        
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:4|confirmed',
            'password_confirmation' => 'required|string|'
        ]);

        DB::table('user')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'admin',
        ]);

        return redirect()->url('/login');
    }
}
