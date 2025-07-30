<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'admin@midastech.in' => 'admin123',
            'manager@midastech.in' => 'manager123',
            'supervisor@midastech.in' => 'supervisor123'
        ];

        $email = $request->input('email');
        $password = $request->input('password');

        if (isset($credentials[$email]) && $credentials[$email] === $password) {
            session([
                'admin_logged_in' => true,
                'admin_email' => $email,
                'admin_name' => ucfirst(explode('@', $email)[0])
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Welcome to MIDAS Admin Panel!');
        }

        return back()->withErrors(['email' => 'Invalid credentials provided.']);
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_email', 'admin_name']);
        return redirect()->route('admin.login')->with('success', 'Successfully logged out.');
    }
}