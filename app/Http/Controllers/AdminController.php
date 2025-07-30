<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // Simple session check
        if (!session('admin_logged_in')) {
            redirect()->route('admin.login')->send();
        }
    }

    public function dashboard()
    {
        $stats = [
            'total_customers' => 1247,
            'active_policies' => 3856,
            'pending_claims' => 89,
            'monthly_revenue' => 4567890,
            'commission_earned' => 567890,
            'new_customers_this_month' => 156
        ];

        $recentActivities = [
            ['action' => 'New policy created', 'customer' => 'Amit Sharma', 'time' => '2 hours ago'],
            ['action' => 'Claim processed', 'customer' => 'Priya Patel', 'time' => '4 hours ago'],
            ['action' => 'Document uploaded', 'customer' => 'Rajesh Kumar', 'time' => '6 hours ago'],
            ['action' => 'Commission calculated', 'customer' => 'Neha Gupta', 'time' => '8 hours ago'],
            ['action' => 'Policy renewed', 'customer' => 'Suresh Reddy', 'time' => '1 day ago']
        ];

        return view('admin.dashboard', compact('stats', 'recentActivities'));
    }

    public function customers()
    {
        $customers = [
            ['id' => 1, 'name' => 'Amit Sharma', 'email' => 'amit@example.com', 'phone' => '+91 98765 43210', 'policies' => 3, 'status' => 'Active'],
            ['id' => 2, 'name' => 'Priya Patel', 'email' => 'priya@example.com', 'phone' => '+91 98765 43211', 'policies' => 2, 'status' => 'Active'],
            ['id' => 3, 'name' => 'Rajesh Kumar', 'email' => 'rajesh@example.com', 'phone' => '+91 98765 43212', 'policies' => 1, 'status' => 'Pending'],
            ['id' => 4, 'name' => 'Neha Gupta', 'email' => 'neha@example.com', 'phone' => '+91 98765 43213', 'policies' => 4, 'status' => 'Active'],
            ['id' => 5, 'name' => 'Suresh Reddy', 'email' => 'suresh@example.com', 'phone' => '+91 98765 43214', 'policies' => 2, 'status' => 'Inactive']
        ];

        return view('admin.customers', compact('customers'));
    }

    public function policies()
    {
        $policies = [
            ['id' => 'POL001', 'customer' => 'Amit Sharma', 'type' => 'Life Insurance', 'premium' => 25000, 'status' => 'Active', 'expiry' => '2025-12-31'],
            ['id' => 'POL002', 'customer' => 'Priya Patel', 'type' => 'Health Insurance', 'premium' => 15000, 'status' => 'Active', 'expiry' => '2025-08-15'],
            ['id' => 'POL003', 'customer' => 'Rajesh Kumar', 'type' => 'Motor Insurance', 'premium' => 8000, 'status' => 'Pending', 'expiry' => '2025-06-20'],
            ['id' => 'POL004', 'customer' => 'Neha Gupta', 'type' => 'Home Insurance', 'premium' => 12000, 'status' => 'Active', 'expiry' => '2025-11-10'],
            ['id' => 'POL005', 'customer' => 'Suresh Reddy', 'type' => 'Travel Insurance', 'premium' => 5000, 'status' => 'Expired', 'expiry' => '2024-12-01']
        ];

        return view('admin.policies', compact('policies'));
    }

    public function claims()
    {
        $claims = [
            ['id' => 'CLM001', 'customer' => 'Amit Sharma', 'policy' => 'POL001', 'amount' => 50000, 'status' => 'Processing', 'date' => '2025-01-15'],
            ['id' => 'CLM002', 'customer' => 'Priya Patel', 'policy' => 'POL002', 'amount' => 25000, 'status' => 'Approved', 'date' => '2025-01-10'],
            ['id' => 'CLM003', 'customer' => 'Neha Gupta', 'policy' => 'POL004', 'amount' => 30000, 'status' => 'Under Review', 'date' => '2025-01-08'],
            ['id' => 'CLM004', 'customer' => 'Rajesh Kumar', 'policy' => 'POL003', 'amount' => 15000, 'status' => 'Rejected', 'date' => '2025-01-05'],
            ['id' => 'CLM005', 'customer' => 'Suresh Reddy', 'policy' => 'POL005', 'amount' => 8000, 'status' => 'Settled', 'date' => '2024-12-28']
        ];

        return view('admin.claims', compact('claims'));
    }

    public function reports()
    {
        $reportData = [
            'monthly_sales' => [
                'January' => 450000,
                'February' => 520000,
                'March' => 480000,
                'April' => 610000,
                'May' => 590000,
                'June' => 670000
            ],
            'policy_types' => [
                'Life Insurance' => 35,
                'Health Insurance' => 28,
                'Motor Insurance' => 22,
                'Home Insurance' => 10,
                'Travel Insurance' => 5
            ],
            'commission_breakdown' => [
                'Life Insurance' => 125000,
                'Health Insurance' => 89000,
                'Motor Insurance' => 45000,
                'Home Insurance' => 23000,
                'Travel Insurance' => 8000
            ]
        ];

        return view('admin.reports', compact('reportData'));
    }

    public function commissions()
    {
        $commissions = [
            ['id' => 1, 'agent' => 'Parth Rawal', 'policy' => 'POL001', 'customer' => 'Amit Sharma', 'amount' => 2500, 'rate' => '10%', 'status' => 'Paid', 'date' => '2025-01-15'],
            ['id' => 2, 'agent' => 'Vikram Desai', 'policy' => 'POL002', 'customer' => 'Priya Patel', 'amount' => 1500, 'rate' => '10%', 'status' => 'Pending', 'date' => '2025-01-12'],
            ['id' => 3, 'agent' => 'Raj Patel', 'policy' => 'POL003', 'customer' => 'Rajesh Kumar', 'amount' => 800, 'rate' => '10%', 'status' => 'Processing', 'date' => '2025-01-10'],
            ['id' => 4, 'agent' => 'Parth Rawal', 'policy' => 'POL004', 'customer' => 'Neha Gupta', 'amount' => 1200, 'rate' => '10%', 'status' => 'Paid', 'date' => '2025-01-08'],
            ['id' => 5, 'agent' => 'Vikram Desai', 'policy' => 'POL005', 'customer' => 'Suresh Reddy', 'amount' => 500, 'rate' => '10%', 'status' => 'Paid', 'date' => '2025-01-05']
        ];

        return view('admin.commissions', compact('commissions'));
    }
}