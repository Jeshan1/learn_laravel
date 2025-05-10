<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        return view('register');
    }

    // Handle the registration request
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('ageform'); // Redirect to a home page or dashboard
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('ageform'); // Redirect to a home page or dashboard
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

