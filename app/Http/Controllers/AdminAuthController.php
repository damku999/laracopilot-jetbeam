<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    // Static admin credentials
    private $adminCredentials = [
        [
            'email' => 'admin@usermanagement.com',
            'password' => 'admin123',
            'name' => 'System Administrator',
            'role' => 'Super Admin'
        ],
        [
            'email' => 'manager@usermanagement.com',
            'password' => 'manager123',
            'name' => 'HR Manager',
            'role' => 'Manager'
        ],
        [
            'email' => 'supervisor@usermanagement.com',
            'password' => 'supervisor123',
            'name' => 'Team Supervisor',
            'role' => 'Supervisor'
        ]
    ];

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        foreach ($this->adminCredentials as $admin) {
            if ($admin['email'] === $email && $admin['password'] === $password) {
                Session::put('admin_logged_in', true);
                Session::put('admin_user', $admin);
                return redirect()->route('admin.dashboard');
            }
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        Session::forget('admin_user');
        return redirect()->route('admin.login');
    }
}