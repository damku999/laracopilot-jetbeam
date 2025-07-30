<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - User Management System')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gradient-to-br from-slate-100 to-blue-50 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-b from-slate-800 to-slate-900 min-h-screen shadow-2xl">
            <!-- Logo -->
            <div class="p-6 border-b border-slate-700">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                    </div>
                    <span class="text-white text-lg font-bold">Admin Panel</span>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="mt-6">
                <div class="px-3">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-3 text-slate-300 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-300 mb-1 {{ request()->routeIs('admin.dashboard') ? 'bg-slate-700 text-white' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                        </svg>
                        Dashboard
                    </a>

                    <a href="{{ route('admin.users') }}" class="flex items-center px-3 py-3 text-slate-300 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-300 mb-1 {{ request()->routeIs('admin.users') ? 'bg-slate-700 text-white' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                        Users
                    </a>

                    <a href="{{ route('admin.roles') }}" class="flex items-center px-3 py-3 text-slate-300 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-300 mb-1 {{ request()->routeIs('admin.roles') ? 'bg-slate-700 text-white' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        Roles & Permissions
                    </a>

                    <a href="{{ route('admin.profile') }}" class="flex items-center px-3 py-3 text-slate-300 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-300 mb-1 {{ request()->routeIs('admin.profile') ? 'bg-slate-700 text-white' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Profile
                    </a>
                </div>
            </nav>

            <!-- Bottom Section -->
            <div class="absolute bottom-0 w-64 p-4 border-t border-slate-700">
                <a href="/" class="flex items-center px-3 py-2 text-slate-400 hover:text-white transition-colors duration-300 text-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Website
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Top Header -->
            <header class="bg-white/90 backdrop-blur-md shadow-lg border-b border-slate-200 px-6 py-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-slate-800">@yield('page-title', 'Dashboard')</h1>
                        <p class="text-slate-600 text-sm">@yield('page-description', 'Manage your system efficiently')</p>
                    </div>

                    <!-- User Info & Actions -->
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <button class="relative p-2 text-slate-600 hover:text-slate-800 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM10.5 3.75a6 6 0 0 1 6 6v2.25l2.25 2.25v2.25h-15v-2.25L6 12V9.75a6 6 0 0 1 4.5-6z"/>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full"></span>
                        </button>

                        <!-- User Profile -->
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">
                                    {{ substr(Session::get('admin_user.name', 'Admin'), 0, 1) }}
                                </span>
                            </div>
                            <div class="hidden md:block">
                                <p class="text-sm font-semibold text-slate-800">{{ Session::get('admin_user.name', 'Administrator') }}</p>
                                <p class="text-xs text-slate-600">{{ Session::get('admin_user.role', 'Admin') }}</p>
                            </div>
                        </div>

                        <!-- Logout -->
                        <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Add any admin-specific JavaScript here
        $(document).ready(function() {
            // Initialize tooltips, modals, etc.
            console.log('Admin panel loaded');
        });
    </script>
</body>
</html>