<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.login', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5', 'max:80'],
        ]);

        // $validator['password'] = bcrypt($validator['password']);

        if (Auth::attempt($validator)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with('failed', 'Login Failed!');
    }

    // exit the login form to logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}