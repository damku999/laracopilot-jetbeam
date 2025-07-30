<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - MIDAS TECH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<body class="bg-gradient-to-br from-midas-dark via-midas-blue to-blue-900 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-4">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-gradient-to-r from-midas-gold to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <span class="text-white font-bold text-2xl">M</span>
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">MIDAS TECH</h1>
            <p class="text-blue-100">Admin Panel Access</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl p-8 border border-white/20">
            <h2 class="text-2xl font-bold text-slate-800 mb-6 text-center">Admin Login</h2>
            
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6">
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-midas-blue focus:ring-2 focus:ring-midas-blue/20 transition-all duration-300"
                           placeholder="Enter your email">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required 
                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-midas-blue focus:ring-2 focus:ring-midas-blue/20 transition-all duration-300"
                           placeholder="Enter your password">
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-midas-blue to-midas-dark hover:from-midas-dark hover:to-midas-blue text-white py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Login to Admin Panel
                </button>
            </form>

            <!-- Demo Credentials -->
            <div class="mt-8 p-6 bg-gradient-to-r from-slate-50 to-blue-50 rounded-2xl border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-800 mb-4 text-center">Demo Credentials</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between items-center p-3 bg-white rounded-lg shadow-sm">
                        <div>
                            <p class="font-medium text-slate-800">Admin Account</p>
                            <p class="text-slate-600">admin@midastech.in</p>
                        </div>
                        <div class="text-right">
                            <p class="font-mono text-midas-blue">admin123</p>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center p-3 bg-white rounded-lg shadow-sm">
                        <div>
                            <p class="font-medium text-slate-800">Manager Account</p>
                            <p class="text-slate-600">manager@midastech.in</p>
                        </div>
                        <div class="text-right">
                            <p class="font-mono text-midas-blue">manager123</p>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center p-3 bg-white rounded-lg shadow-sm">
                        <div>
                            <p class="font-medium text-slate-800">Supervisor Account</p>
                            <p class="text-slate-600">supervisor@midastech.in</p>
                        </div>
                        <div class="text-right">
                            <p class="font-mono text-midas-blue">supervisor123</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back to Website -->
            <div class="mt-6 text-center">
                <a href="{{ route('home') }}" class="inline-flex items-center text-midas-blue hover:text-midas-dark font-medium transition-colors duration-300">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Website
                </a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Auto-fill demo credentials on click
            $('.bg-white.rounded-lg').click(function() {
                const email = $(this).find('.text-slate-600').text();
                const password = $(this).find('.font-mono').text();
                
                $('#email').val(email);
                $('#password').val(password);
                
                // Add visual feedback
                $(this).addClass('ring-2 ring-midas-blue');
                setTimeout(() => {
                    $(this).removeClass('ring-2 ring-midas-blue');
                }, 1000);
            });

            // Add hover effects
            $('.bg-white.rounded-lg').hover(
                function() {
                    $(this).addClass('shadow-md scale-105');
                },
                function() {
                    $(this).removeClass('shadow-md scale-105');
                }
            );
        });
    </script>
</body>
</html>