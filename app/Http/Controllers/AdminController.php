<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $dashboardData = [
            'stats' => [
                ['label' => 'Total Users', 'value' => '2,847', 'change' => '+12%', 'trend' => 'up'],
                ['label' => 'Active Sessions', 'value' => '1,234', 'change' => '+5%', 'trend' => 'up'],
                ['label' => 'Custom Roles', 'value' => '24', 'change' => '+2', 'trend' => 'up'],
                ['label' => 'Permissions', 'value' => '156', 'change' => '+8', 'trend' => 'up']
            ],
            'recentActivity' => [
                ['user' => 'John Smith', 'action' => 'Created new user account', 'time' => '2 minutes ago'],
                ['user' => 'Sarah Johnson', 'action' => 'Updated role permissions', 'time' => '15 minutes ago'],
                ['user' => 'Mike Davis', 'action' => 'Deleted inactive user', 'time' => '1 hour ago'],
                ['user' => 'Lisa Wilson', 'action' => 'Modified user profile', 'time' => '2 hours ago']
            ]
        ];

        return view('admin.dashboard', compact('dashboardData'));
    }

    public function users()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $users = [
            [
                'id' => 1,
                'name' => 'John Smith',
                'email' => 'john.smith@company.com',
                'role' => 'Administrator',
                'department' => 'IT',
                'status' => 'Active',
                'last_login' => '2024-01-15 09:30:00',
                'created_at' => '2023-06-15'
            ],
            [
                'id' => 2,
                'name' => 'Sarah Johnson',
                'email' => 'sarah.johnson@company.com',
                'role' => 'Manager',
                'department' => 'HR',
                'status' => 'Active',
                'last_login' => '2024-01-15 08:45:00',
                'created_at' => '2023-07-20'
            ],
            [
                'id' => 3,
                'name' => 'Mike Davis',
                'email' => 'mike.davis@company.com',
                'role' => 'Employee',
                'department' => 'Sales',
                'status' => 'Inactive',
                'last_login' => '2024-01-10 16:20:00',
                'created_at' => '2023-08-10'
            ],
            [
                'id' => 4,
                'name' => 'Lisa Wilson',
                'email' => 'lisa.wilson@company.com',
                'role' => 'Supervisor',
                'department' => 'Marketing',
                'status' => 'Active',
                'last_login' => '2024-01-15 11:15:00',
                'created_at' => '2023-09-05'
            ],
            [
                'id' => 5,
                'name' => 'Robert Brown',
                'email' => 'robert.brown@company.com',
                'role' => 'Employee',
                'department' => 'Finance',
                'status' => 'Pending',
                'last_login' => 'Never',
                'created_at' => '2024-01-14'
            ]
        ];

        return view('admin.users', compact('users'));
    }

    public function roles()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $roles = [
            [
                'id' => 1,
                'name' => 'Super Administrator',
                'description' => 'Full system access with all permissions',
                'users_count' => 2,
                'permissions' => ['user.create', 'user.read', 'user.update', 'user.delete', 'role.manage', 'system.config'],
                'created_at' => '2023-01-01'
            ],
            [
                'id' => 2,
                'name' => 'Administrator',
                'description' => 'Administrative access with user management',
                'users_count' => 5,
                'permissions' => ['user.create', 'user.read', 'user.update', 'user.delete', 'role.view'],
                'created_at' => '2023-01-01'
            ],
            [
                'id' => 3,
                'name' => 'Manager',
                'description' => 'Departmental management with limited admin access',
                'users_count' => 12,
                'permissions' => ['user.read', 'user.update', 'department.manage'],
                'created_at' => '2023-02-15'
            ],
            [
                'id' => 4,
                'name' => 'Supervisor',
                'description' => 'Team supervision with basic user management',
                'users_count' => 18,
                'permissions' => ['user.read', 'team.manage'],
                'created_at' => '2023-03-10'
            ],
            [
                'id' => 5,
                'name' => 'Employee',
                'description' => 'Standard employee access',
                'users_count' => 156,
                'permissions' => ['profile.update'],
                'created_at' => '2023-01-01'
            ]
        ];

        $permissions = [
            ['name' => 'user.create', 'description' => 'Create new users'],
            ['name' => 'user.read', 'description' => 'View user information'],
            ['name' => 'user.update', 'description' => 'Update user profiles'],
            ['name' => 'user.delete', 'description' => 'Delete user accounts'],
            ['name' => 'role.manage', 'description' => 'Manage roles and permissions'],
            ['name' => 'role.view', 'description' => 'View roles and permissions'],
            ['name' => 'department.manage', 'description' => 'Manage department settings'],
            ['name' => 'team.manage', 'description' => 'Manage team members'],
            ['name' => 'profile.update', 'description' => 'Update own profile'],
            ['name' => 'system.config', 'description' => 'System configuration access']
        ];

        return view('admin.roles', compact('roles', 'permissions'));
    }

    public function profile()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $profileData = [
            'user' => [
                'name' => 'System Administrator',
                'email' => 'admin@usermanagement.com',
                'role' => 'Super Admin',
                'department' => 'IT Administration',
                'phone' => '+1 (555) 123-4567',
                'location' => 'New York, NY',
                'joined_date' => '2023-01-01',
                'last_login' => '2024-01-15 09:30:00',
                'avatar' => null
            ],
            'settings' => [
                'email_notifications' => true,
                'sms_notifications' => false,
                'two_factor_auth' => true,
                'session_timeout' => 30
            ]
        ];

        return view('admin.profile', compact('profileData'));
    }
}