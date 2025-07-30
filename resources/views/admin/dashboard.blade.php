@extends('layouts.admin')

@section('title', 'Dashboard - User Management System')
@section('page-title', 'Dashboard')
@section('page-description', 'Overview of your user management system')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @foreach($dashboardData['stats'] as $stat)
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 hover:shadow-xl transition-all duration-300">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-600 mb-1">{{ $stat['label'] }}</p>
                <p class="text-3xl font-bold text-slate-800">{{ $stat['value'] }}</p>
                <div class="flex items-center mt-2">
                    @if($stat['trend'] == 'up')
                    <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l9.2-9.2M17 17V7H7"/>
                    </svg>
                    <span class="text-sm text-green-600 font-medium">{{ $stat['change'] }}</span>
                    @else
                    <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 7l-9.2 9.2M7 7v10h10"/>
                    </svg>
                    <span class="text-sm text-red-600 font-medium">{{ $stat['change'] }}</span>
                    @endif
                </div>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                </svg>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- User Growth Chart -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">User Growth Analytics</h3>
        <div class="w-full overflow-x-auto">
            <div style="width: 600px; height: 300px; min-width: 600px;">
                <canvas id="userGrowthChart" width="600" height="300"></canvas>
            </div>
        </div>
        <p class="text-sm text-slate-500 mt-4">*Fixed dimensions optimized for desktop viewing</p>
    </div>

    <!-- Role Distribution -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">Role Distribution</h3>
        <div class="w-full overflow-x-auto">
            <div style="width: 600px; height: 300px; min-width: 600px;">
                <canvas id="roleDistributionChart" width="600" height="300"></canvas>
            </div>
        </div>
        <p class="text-sm text-slate-500 mt-4">*Fixed dimensions optimized for desktop viewing</p>
    </div>
</div>

<!-- Recent Activity -->
<div class="mt-8">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-6">Recent Activity</h3>
        <div class="space-y-4">
            @foreach($dashboardData['recentActivity'] as $activity)
            <div class="flex items-center p-4 bg-slate-50 rounded-xl">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mr-4">
                    <span class="text-white font-semibold text-sm">{{ substr($activity['user'], 0, 1) }}</span>
                </div>
                <div class="flex-1">
                    <p class="text-slate-800 font-medium">{{ $activity['user'] }}</p>
                    <p class="text-slate-600 text-sm">{{ $activity['action'] }}</p>
                </div>
                <div class="text-slate-500 text-sm">{{ $activity['time'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // User Growth Chart
    const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
    new Chart(userGrowthCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Users',
                data: [1200, 1350, 1580, 1890, 2240, 2847],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Role Distribution Chart
    const roleDistributionCtx = document.getElementById('roleDistributionChart').getContext('2d');
    new Chart(roleDistributionCtx, {
        type: 'doughnut',
        data: {
            labels: ['Employee', 'Supervisor', 'Manager', 'Administrator', 'Super Admin'],
            datasets: [{
                data: [156, 18, 12, 5, 2],
                backgroundColor: [
                    'rgb(59, 130, 246)',
                    'rgb(16, 185, 129)',
                    'rgb(245, 158, 11)',
                    'rgb(239, 68, 68)',
                    'rgb(139, 92, 246)'
                ]
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
});
</script>
@endsection