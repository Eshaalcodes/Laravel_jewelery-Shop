<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register page
    public function registerPage()
    {
        return view('auth.register');
    }

    // Register customer
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        // New registered users are customers
        $data['role'] = 'customer';

        User::create($data);

        return redirect()
            ->route('loginFrom')
            ->with('success', 'Registration successful. Please login.');
    }

    // Login page
    public function loginPage()
    {
        return view('auth.login');
    }

    // Login
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($data)) {

            $request->session()->regenerate();

            // Admin goes to Admin Dashboard
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin');
            }

            // Customer goes to Website
            return redirect()->route('index');
        }

        return back()
            ->withInput($request->only('email'))
            ->with('error', 'Email or Password is incorrect');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}