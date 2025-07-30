<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MIDAS TECH - The Golden Key to Smart Insurance Management')</title>
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
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-r from-midas-gold to-yellow-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-xl">M</span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-midas-dark">MIDAS TECH</h1>
                        <p class="text-sm text-gray-600">The Golden Key to Smart Insurance Management</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-midas-blue font-medium transition-colors duration-300 {{ request()->routeIs('home') ? 'text-midas-blue border-b-2 border-midas-blue' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-midas-blue font-medium transition-colors duration-300 {{ request()->routeIs('about') ? 'text-midas-blue border-b-2 border-midas-blue' : '' }}">
                        About Us
                    </a>
                    <a href="{{ route('pricing') }}" class="text-gray-700 hover:text-midas-blue font-medium transition-colors duration-300 {{ request()->routeIs('pricing') ? 'text-midas-blue border-b-2 border-midas-blue' : '' }}">
                        Pricing
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-midas-blue font-medium transition-colors duration-300 {{ request()->routeIs('contact') ? 'text-midas-blue border-b-2 border-midas-blue' : '' }}">
                        Contact
                    </a>
                    <a href="{{ route('admin.login') }}" class="bg-gradient-to-r from-midas-blue to-midas-dark text-white px-4 py-2 rounded-lg font-medium hover:from-midas-dark hover:to-midas-blue transition-all duration-300 shadow-md hover:shadow-lg">
                        Admin Panel
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-md text-gray-700 hover:text-midas-blue hover:bg-gray-100 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden hidden pb-4">
                <div class="flex flex-col space-y-2">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-midas-blue font-medium py-2 px-4 rounded-md hover:bg-gray-100 transition-all duration-300">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-midas-blue font-medium py-2 px-4 rounded-md hover:bg-gray-100 transition-all duration-300">About Us</a>
                    <a href="{{ route('pricing') }}" class="text-gray-700 hover:text-midas-blue font-medium py-2 px-4 rounded-md hover:bg-gray-100 transition-all duration-300">Pricing</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-midas-blue font-medium py-2 px-4 rounded-md hover:bg-gray-100 transition-all duration-300">Contact</a>
                    <a href="{{ route('admin.login') }}" class="bg-gradient-to-r from-midas-blue to-midas-dark text-white px-4 py-2 rounded-lg font-medium hover:from-midas-dark hover:to-midas-blue transition-all duration-300 shadow-md text-center">Admin Panel</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Four Column Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                
                <!-- Column 1: Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-midas-gold to-yellow-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold">M</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">MIDAS TECH</h3>
                            <p class="text-sm text-slate-300">The Golden Key to Smart Insurance Management</p>
                        </div>
                    </div>
                    <p class="text-slate-300 text-sm mb-4 leading-relaxed">
                        At MIDAS by WebMonks, we are dedicated to providing innovative data management solutions tailored to your business needs. Our commitment to excellence ensures you have the tools and support necessary for success in today's dynamic environment.
                    </p>
                </div>

                <!-- Column 2: Useful Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Useful Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Home Page</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Contact Us</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Terms & Conditions</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Dashboard Management</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Customer Data Management</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Policy Management</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Claims Processing</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-slate-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            <div>
                                <p class="text-slate-300 text-sm">C243, Second Floor, SoBo Center</p>
                                <p class="text-slate-300 text-sm">Gala Gymkhana Road, South Bopal</p>
                                <p class="text-slate-300 text-sm">Ahmedabad - 380058</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <p class="text-slate-300 text-sm">+91 80000 71413</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-slate-300 text-sm">Info@midastech.in</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Border and Copyright -->
            <div class="border-t border-slate-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <!-- Left: Copyright -->
                    <div class="text-sm text-slate-400 mb-4 md:mb-0">
                        © {{ date('Y') }} WebMonks Technologies. All rights reserved.
                    </div>
                    
                    <!-- Center: Privacy Links -->
                    <div class="flex space-x-6 mb-4 md:mb-0">
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Privacy Policy</a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Terms of Service</a>
                    </div>
                    
                    <!-- Right: LaraCopilot Branding -->
                    <div class="text-sm text-slate-400">
                        Made with ❤️ <span class="text-white font-medium">LaraCopilot</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Mobile menu toggle
            $('#mobile-menu-btn').click(function() {
                $('#mobile-menu').toggleClass('hidden');
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });

            // Add scroll effect to header
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('header').addClass('bg-white/95 backdrop-blur-md');
                } else {
                    $('header').removeClass('bg-white/95 backdrop-blur-md');
                }
            });
        });
    </script>
</body>
</html>