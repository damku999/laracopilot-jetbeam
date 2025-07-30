@extends('layouts.admin')

@section('title', 'Dashboard - MIDAS TECH Admin')
@section('page-title', 'Dashboard')
@section('page-description', 'Overview of your insurance business performance')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-blue-100 text-sm font-medium">Total Customers</p>
                <p class="text-3xl font-bold">{{ number_format($stats['total_customers']) }}</p>
                <p class="text-blue-200 text-sm mt-1">+12% from last month</p>
            </div>
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-green-100 text-sm font-medium">Active Policies</p>
                <p class="text-3xl font-bold">{{ number_format($stats['active_policies']) }}</p>
                <p class="text-green-200 text-sm mt-1">+8% from last month</p>
            </div>
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-orange-100 text-sm font-medium">Pending Claims</p>
                <p class="text-3xl font-bold">{{ number_format($stats['pending_claims']) }}</p>
                <p class="text-orange-200 text-sm mt-1">-5% from last month</p>
            </div>
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-purple-100 text-sm font-medium">Monthly Revenue</p>
                <p class="text-3xl font-bold">₹{{ number_format($stats['monthly_revenue']) }}</p>
                <p class="text-purple-200 text-sm mt-1">+15% from last month</p>
            </div>
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-teal-500 to-teal-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-teal-100 text-sm font-medium">Commission Earned</p>
                <p class="text-3xl font-bold">₹{{ number_format($stats['commission_earned']) }}</p>
                <p class="text-teal-200 text-sm mt-1">+18% from last month</p>
            </div>
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-indigo-100 text-sm font-medium">New Customers</p>
                <p class="text-3xl font-bold">{{ number_format($stats['new_customers_this_month']) }}</p>
                <p class="text-indigo-200 text-sm mt-1">This month</p>
            </div>
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Revenue Chart - Fixed Dimensions -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">Monthly Revenue Trend</h3>
        <div class="w-full overflow-x-auto">
            <div style="width: 600px; height: 300px; min-width: 600px;">
                <canvas id="revenueChart" width="600" height="300"></canvas>
            </div>
        </div>
        <p class="text-sm text-slate-500 mt-4">*Fixed dimensions optimized for desktop viewing</p>
    </div>

    <!-- Policy Distribution Chart - Fixed Dimensions -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">Policy Type Distribution</h3>
        <div class="w-full overflow-x-auto">
            <div style="width: 600px; height: 300px; min-width: 600px;">
                <canvas id="policyChart" width="600" height="300"></canvas>
            </div>
        </div>
        <p class="text-sm text-slate-500 mt-4">*Fixed dimensions optimized for desktop viewing</p>
    </div>
</div>

<!-- Recent Activities -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
    <h3 class="text-lg font-semibold text-slate-800 mb-6">Recent Activities</h3>
    <div class="space-y-4">
        @foreach($recentActivities as $activity)
        <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-slate-50 to-white rounded-xl border border-slate-100 hover:shadow-md transition-all duration-300">
            <div class="w-12 h-12 bg-gradient-to-r from-midas-blue to-midas-dark rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            <div class="flex-1">
                <p class="font-medium text-slate-800">{{ $activity['action'] }}</p>
                <p class="text-sm text-slate-600">Customer: {{ $activity['customer'] }}</p>
            </div>
            <div class="text-right">
                <p class="text-sm text-slate-500">{{ $activity['time'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
$(document).ready(function() {
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue (₹)',
                data: [450000, 520000, 480000, 610000, 590000, 670000],
                borderColor: '#1e40af',
                backgroundColor: 'rgba(30, 64, 175, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return '₹' + (value / 1000) + 'K';
                        }
                    }
                }
            }
        }
    });

    // Policy Distribution Chart
    const policyCtx = document.getElementById('policyChart').getContext('2d');
    new Chart(policyCtx, {
        type: 'doughnut',
        data: {
            labels: ['Life Insurance', 'Health Insurance', 'Motor Insurance', 'Home Insurance', 'Travel Insurance'],
            datasets: [{
                data: [35, 28, 22, 10, 5],
                backgroundColor: [
                    '#1e40af',
                    '#f59e0b',
                    '#10b981',
                    '#8b5cf6',
                    '#f97316'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right'
                }
            }
        }
    });
});
</script>
@endsection