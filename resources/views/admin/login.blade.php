<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - User Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 min-h-screen flex items-center justify-center">
    <div class="bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl p-8 w-full max-w-md border border-blue-200/50">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-slate-800">Admin Login</h1>
            <p class="text-slate-600 mt-2">User Management System</p>
        </div>

        <!-- Demo Credentials Display -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-4 mb-6 border border-blue-200">
            <h3 class="font-semibold text-slate-800 mb-3 flex items-center">
                <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m0 0a2 2 0 012 2m-2-2a2 2 0 00-2 2m0 0a2 2 0 01-2 2m2-2a2 2 0 002 2m0 0a2 2 0 01-2 2m2-2a2 2 0 00-2-2m0 0a2 2 0 012-2"/>
                </svg>
                Demo Credentials
            </h3>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between items-center py-1">
                    <span class="text-slate-600">Super Admin:</span>
                    <span class="text-slate-800 font-medium">admin@usermanagement.com</span>
                </div>
                <div class="flex justify-between items-center py-1">
                    <span class="text-slate-600">HR Manager:</span>
                    <span class="text-slate-800 font-medium">manager@usermanagement.com</span>
                </div>
                <div class="flex justify-between items-center py-1">
                    <span class="text-slate-600">Supervisor:</span>
                    <span class="text-slate-800 font-medium">supervisor@usermanagement.com</span>
                </div>
                <div class="text-center pt-2 border-t border-blue-200">
                    <span class="text-slate-600">All passwords:</span>
                    <span class="text-slate-800 font-medium">admin123, manager123, supervisor123</span>
                </div>
            </div>
        </div>

        <!-- Login Form -->
        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                <input type="email" name="email" required 
                       class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                       placeholder="Enter your email">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                <input type="password" name="password" required 
                       class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                       placeholder="Enter your password">
            </div>

            @if(session('error'))
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl">
                    {{ session('error') }}
                </div>
            @endif

            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                Sign In to Admin Panel
            </button>
        </form>

        <!-- Quick Login Buttons -->
        <div class="mt-6 pt-6 border-t border-slate-200">
            <p class="text-sm text-slate-600 text-center mb-3">Quick Login:</p>
            <div class="flex flex-col space-y-2">
                <button onclick="quickLogin('admin@usermanagement.com', 'admin123')" 
                        class="text-sm bg-slate-100 hover:bg-slate-200 text-slate-700 px-3 py-2 rounded-lg transition-colors duration-300">
                    Login as Super Admin
                </button>
                <button onclick="quickLogin('manager@usermanagement.com', 'manager123')" 
                        class="text-sm bg-slate-100 hover:bg-slate-200 text-slate-700 px-3 py-2 rounded-lg transition-colors duration-300">
                    Login as HR Manager
                </button>
            </div>
        </div>

        <!-- Back to Website -->
        <div class="mt-6 text-center">
            <a href="/" class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors duration-300">
                ← Back to Website
            </a>
        </div>
    </div>

    <script>
        function quickLogin(email, password) {
            $('input[name="email"]').val(email);
            $('input[name="password"]').val(password);
            $('form').submit();
        }
    </script>
</body>
</html>