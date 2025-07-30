<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops! - MIDAS TECH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'midas-blue': '#1e40af',
                        'midas-gold': '#f59e0b',
                        'midas-dark': '#1e3a8a'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-slate-50 to-white min-h-screen flex items-center justify-center px-4">
    <div class="text-center max-w-2xl mx-auto">
        <!-- Error Icon -->
        <div class="mb-8">
            <div class="w-32 h-32 bg-gradient-to-r from-midas-gold to-yellow-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                </svg>
            </div>
        </div>

        <!-- Error Content -->
        <h1 class="text-4xl md:text-6xl font-bold text-slate-800 mb-4">Oops!</h1>
        <h2 class="text-2xl md:text-3xl font-semibold text-slate-600 mb-6">Something went wrong</h2>
        <p class="text-lg text-slate-500 mb-8 leading-relaxed">
            We're sorry, but the page you're looking for can't be found. 
            Don't worry, it happens to the best of us! Let's get you back on track.
        </p>

        <!-- MIDAS Branding -->
        <div class="flex items-center justify-center space-x-3 mb-8">
            <div class="w-12 h-12 bg-gradient-to-r from-midas-gold to-yellow-500 rounded-xl flex items-center justify-center">
                <span class="text-white font-bold text-xl">M</span>
            </div>
            <div>
                <h3 class="text-xl font-bold text-midas-dark">MIDAS TECH</h3>
                <p class="text-sm text-slate-600">The Golden Key to Smart Insurance Management</p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="/" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-midas-blue to-midas-dark hover:from-midas-dark hover:to-midas-blue text-white rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Go Home
            </a>
            <button onclick="history.back()" class="inline-flex items-center px-6 py-3 bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 rounded-xl font-semibold transition-all duration-300 shadow-md hover:shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Go Back
            </button>
        </div>

        <!-- Contact Information -->
        <div class="bg-gradient-to-r from-blue-50 to-white rounded-2xl p-6 border border-blue-100">
            <h3 class="text-lg font-semibold text-slate-800 mb-4">Need Help?</h3>
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-2 sm:space-y-0 sm:space-x-6 text-sm text-slate-600">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-midas-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Info@midastech.in
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-midas-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    +91 80000 71413
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-sm text-slate-400">
            Made with ❤️ <span class="text-slate-600 font-medium">LaraCopilot</span>
        </div>
    </div>
</body>
</html>