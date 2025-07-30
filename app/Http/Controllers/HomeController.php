<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $websiteData = [
            'hero' => [
                'title' => 'Enterprise User Management',
                'subtitle' => 'Streamline your organization with powerful user management tools',
                'description' => 'Complete solution for managing users, roles, and permissions in your enterprise environment.'
            ],
            'features' => [
                [
                    'icon' => 'users',
                    'title' => 'User Management',
                    'description' => 'Create, edit, and manage user accounts with comprehensive profile management and role assignments.'
                ],
                [
                    'icon' => 'shield-check',
                    'title' => 'Role & Permissions',
                    'description' => 'Define custom roles and granular permissions to control access across your organization.'
                ],
                [
                    'icon' => 'user-circle',
                    'title' => 'Profile Management',
                    'description' => 'Advanced profile management with custom fields, photo uploads, and detailed user information.'
                ],
                [
                    'icon' => 'lock',
                    'title' => 'Security Controls',
                    'description' => 'Advanced security features including two-factor authentication and access logging.'
                ]
            ],
            'stats' => [
                ['label' => 'Active Users', 'value' => '2,847'],
                ['label' => 'Custom Roles', 'value' => '24'],
                ['label' => 'Permissions', 'value' => '156'],
                ['label' => 'Organizations', 'value' => '89']
            ]
        ];

        return view('welcome', compact('websiteData'));
    }
}