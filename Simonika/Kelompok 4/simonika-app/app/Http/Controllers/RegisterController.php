<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function form(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:50',
            'username' => ['required', 'min:4', 'max:60', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:7', 'max:60'],
        ]);

        // $validate['password'] = bcrypt($validate['password']);
        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        // Move Pages After Filling The Form
        return redirect('/')->with(
            'success',
            'Registration Successful! Please Do Login'
        );
    }
}
