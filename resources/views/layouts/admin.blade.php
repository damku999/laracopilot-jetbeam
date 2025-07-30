<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - MIDAS TECH')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'midas-blue': '#1e40af',
                        'midas-gold': '#f59e0b',
                        'midas-dark': '#1e3a8a',
                        'midas-light': '#dbeafe'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-b from-midas-dark to-midas-blue shadow-2xl">
            <!-- Logo -->
            <div class="p-6 border-b border-blue-700/50">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-r from-midas-gold to-yellow-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-xl">M</span>
                    </div>
                    <div>
                        <h1 class="text-white font-bold text-lg">MIDAS TECH</h1>
                        <p class="text-blue-200 text-sm">Admin Panel</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="mt-6">
                <div class="px-4">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('admin.dashboard') ? 'bg-white/20 border-l-4 border-midas-gold' : '' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>

                    <a href="{{ route('admin.customers') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('admin.customers') ? 'bg-white/20 border-l-4 border-midas-gold' : '' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                        <span class="font-medium">Customers</span>
                    </a>

                    <a href="{{ route('admin.policies') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('admin.policies') ? 'bg-white/20 border-l-4 border-midas-gold' : '' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="font-medium">Policies</span>
                    </a>

                    <a href="{{ route('admin.claims') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('admin.claims') ? 'bg-white/20 border-l-4 border-midas-gold' : '' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        <span class="font-medium">Claims</span>
                    </a>

                    <a href="{{ route('admin.reports') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('admin.reports') ? 'bg-white/20 border-l-4 border-midas-gold' : '' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <span class="font-medium">Reports</span>
                    </a>

                    <a href="{{ route('admin.commissions') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('admin.commissions') ? 'bg-white/20 border-l-4 border-midas-gold' : '' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                        </svg>
                        <span class="font-medium">Commissions</span>
                    </a>
                </div>

                <!-- Bottom Actions -->
                <div class="absolute bottom-6 left-4 right-4">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition-all duration-300 mb-3 border border-white/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        <span class="font-medium">Back to Website</span>
                    </a>

                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-red-500/20 transition-all duration-300 w-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            <span class="font-medium">Logout</span>
                        </button>
                    </form>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-lg border-b border-slate-200">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-800">@yield('page-title', 'Admin Panel')</h1>
                            <p class="text-slate-600">@yield('page-description', 'Manage your insurance business efficiently')</p>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="text-right">
                                <p class="text-sm font-medium text-slate-700">Welcome back,</p>
                                <p class="text-lg font-semibold text-midas-blue">{{ session('admin_name', 'Admin') }}</p>
                            </div>
                            <div class="w-12 h-12 bg-gradient-to-r from-midas-blue to-midas-dark rounded-full flex items-center justify-center text-white font-bold">
                                {{ substr(session('admin_name', 'A'), 0, 1) }}
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Add smooth transitions to sidebar links
            $('nav a').hover(
                function() {
                    $(this).addClass('transform scale-105');
                },
                function() {
                    $(this).removeClass('transform scale-105');
                }
            );

            // Add loading states to buttons
            $('button[type="submit"]').click(function() {
                $(this).addClass('opacity-75 cursor-not-allowed');
                $(this).prop('disabled', true);
                
                setTimeout(() => {
                    $(this).removeClass('opacity-75 cursor-not-allowed');
                    $(this).prop('disabled', false);
                }, 2000);
            });
        });
    </script>
</body>
</html>