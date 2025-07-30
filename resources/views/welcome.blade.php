@extends('layouts.app')

@section('title', 'MidasTech - Advanced Multi-Tenant SaaS Platform')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 overflow-hidden">
    <!-- Background Animation -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-indigo-900/90 to-purple-900/90"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="relative z-10 text-center text-white max-w-6xl mx-auto px-4">
        <div class="mb-8">
            <div class="inline-flex items-center bg-white/10 backdrop-blur-md rounded-full px-6 py-3 mb-6 border border-white/20">
                <i class="fas fa-rocket text-blue-300 mr-2"></i>
                <span class="text-sm font-medium">Advanced Multi-Tenant SaaS Platform</span>
            </div>
        </div>

        <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
            Transform Your Business with
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-300 via-purple-300 to-pink-300">
                MidasTech
            </span>
        </h1>
        
        <p class="text-xl md:text-2xl mb-8 text-blue-100 max-w-4xl mx-auto leading-relaxed">
            Experience the future of SaaS with our cutting-edge multi-tenant platform. 
            Isolated data, custom subdomains, and enterprise-grade security.
        </p>

        <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
            <a href="/demo-setup" class="group bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 shadow-2xl hover:shadow-blue-500/25 transform hover:-translate-y-1">
                <i class="fas fa-play mr-3 group-hover:animate-pulse"></i>
                Start Free Demo
                <span class="block text-sm font-normal opacity-90">1 Month Trial - No Credit Card</span>
            </a>
            <a href="#features" class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-10 py-4 rounded-2xl font-bold text-lg hover:bg-white/20 transition-all duration-300">
                <i class="fas fa-info-circle mr-3"></i>
                Learn More
            </a>
        </div>

        <!-- Trust Indicators -->
        <div class="flex flex-wrap justify-center items-center gap-8 opacity-70">
            <div class="flex items-center space-x-2">
                <i class="fas fa-shield-alt text-green-400"></i>
                <span class="text-sm">Enterprise Security</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-database text-blue-400"></i>
                <span class="text-sm">Data Isolation</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-globe text-purple-400"></i>
                <span class="text-sm">Custom Subdomains</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-clock text-yellow-400"></i>
                <span class="text-sm">24/7 Support</span>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#features" class="text-white/70 hover:text-white transition-colors duration-300">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center bg-blue-100 rounded-full px-6 py-2 mb-6">
                <i class="fas fa-star text-blue-600 mr-2"></i>
                <span class="text-blue-800 font-semibold">Platform Features</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">
                Everything You Need for Success
            </h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Our comprehensive SaaS platform provides all the tools and features your business needs to thrive in the digital age.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Feature 1: Multi-Tenancy -->
            <div class="bg-white/90 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-blue-100/50 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-building text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Multi-Tenant Architecture</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Complete data isolation for each tenant with custom subdomains. Your data stays private and secure with enterprise-grade separation.
                </p>
                <div class="flex items-center text-blue-600 font-semibold">
                    <span>Learn More</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </div>
            </div>

            <!-- Feature 2: Custom Subdomains -->
            <div class="bg-white/90 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-purple-100/50 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-globe text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Custom Subdomains</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Get your own branded subdomain like yourcompany.midastech.in. Professional appearance with full customization options.
                </p>
                <div class="flex items-center text-purple-600 font-semibold">
                    <span>Get Started</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </div>
            </div>

            <!-- Feature 3: Data Security -->
            <div class="bg-white/90 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-green-100/50 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Enterprise Security</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Bank-level security with encrypted data storage, secure file management, and complete tenant isolation for maximum protection.
                </p>
                <div class="flex items-center text-green-600 font-semibold">
                    <span>View Security</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </div>
            </div>

            <!-- Feature 4: Quick Setup -->
            <div class="bg-white/90 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-orange-100/50 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-rocket text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Instant Demo Setup</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Get started in minutes with our quick demo setup. 1-month free trial with full features - no credit card required.
                </p>
                <div class="flex items-center text-orange-600 font-semibold">
                    <span>Start Demo</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </div>
            </div>

            <!-- Feature 5: Auto Management -->
            <div class="bg-white/90 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-cyan-100/50 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-cogs text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Automated Management</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Automatic tenant cleanup, payment processing, and subscription management. Focus on your business, we handle the tech.
                </p>
                <div class="flex items-center text-cyan-600 font-semibold">
                    <span>See Features</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </div>
            </div>

            <!-- Feature 6: 24/7 Support -->
            <div class="bg-white/90 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-indigo-100/50 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-headset text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">24/7 Expert Support</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Round-the-clock technical support from our expert team. Get help when you need it with priority support channels.
                </p>
                <div class="flex items-center text-indigo-600 font-semibold">
                    <span>Contact Support</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white shadow-2xl">
                <h3 class="text-3xl font-bold mb-4">Ready to Transform Your Business?</h3>
                <p class="text-xl mb-8 opacity-90">Join thousands of companies already using MidasTech</p>
                <a href="/demo-setup" class="bg-white text-blue-600 px-10 py-4 rounded-2xl font-bold text-lg hover:bg-blue-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <i class="fas fa-play mr-3"></i>
                    Start Your Free Demo Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center bg-purple-100 rounded-full px-6 py-2 mb-6">
                <i class="fas fa-tags text-purple-600 mr-2"></i>
                <span class="text-purple-800 font-semibold">Pricing Plans</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">
                Choose Your Perfect Plan
            </h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Flexible pricing options designed to grow with your business. Start free and upgrade as you scale.
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Starter Plan -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-slate-200 hover:shadow-2xl transition-all duration-500">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-slate-800 mb-2">Starter</h3>
                    <p class="text-slate-600 mb-6">Perfect for small businesses</p>
                    <div class="text-4xl font-bold text-slate-800 mb-2">₹999<span class="text-lg font-normal text-slate-500">/month</span></div>
                    <p class="text-sm text-slate-500">Billed monthly</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>1 Custom Subdomain</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>10GB Storage</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Up to 100 Users</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Email Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Basic Analytics</span>
                    </li>
                </ul>
                
                <a href="/demo-setup" class="block w-full text-center bg-slate-100 hover:bg-slate-200 text-slate-800 py-3 rounded-xl font-semibold transition-all duration-300">
                    Start Free Trial
                </a>
            </div>

            <!-- Professional Plan (Popular) -->
            <div class="bg-gradient-to-br from-blue-600 to-purple-600 rounded-3xl p-8 shadow-2xl text-white transform scale-105 relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-gradient-to-r from-orange-400 to-pink-500 text-white px-6 py-2 rounded-full text-sm font-bold">
                        Most Popular
                    </span>
                </div>
                
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold mb-2">Professional</h3>
                    <p class="text-blue-100 mb-6">Best for growing companies</p>
                    <div class="text-4xl font-bold mb-2">₹2,999<span class="text-lg font-normal text-blue-200">/month</span></div>
                    <p class="text-sm text-blue-200">Billed monthly</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-300 mr-3"></i>
                        <span>5 Custom Subdomains</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-300 mr-3"></i>
                        <span>100GB Storage</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-300 mr-3"></i>
                        <span>Up to 1,000 Users</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-300 mr-3"></i>
                        <span>Priority Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-300 mr-3"></i>
                        <span>Advanced Analytics</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-300 mr-3"></i>
                        <span>API Access</span>
                    </li>
                </ul>
                
                <a href="/demo-setup" class="block w-full text-center bg-white text-blue-600 py-3 rounded-xl font-bold transition-all duration-300 hover:bg-blue-50 shadow-lg">
                    Start Free Trial
                </a>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-slate-200 hover:shadow-2xl transition-all duration-500">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-slate-800 mb-2">Enterprise</h3>
                    <p class="text-slate-600 mb-6">For large organizations</p>
                    <div class="text-4xl font-bold text-slate-800 mb-2">₹9,999<span class="text-lg font-normal text-slate-500">/month</span></div>
                    <p class="text-sm text-slate-500">Billed monthly</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Unlimited Subdomains</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>1TB Storage</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Unlimited Users</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>24/7 Phone Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Custom Integrations</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Dedicated Manager</span>
                    </li>
                </ul>
                
                <a href="/demo-setup" class="block w-full text-center bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white py-3 rounded-xl font-semibold transition-all duration-300">
                    Start Free Trial
                </a>
            </div>
        </div>

        <!-- Money Back Guarantee -->
        <div class="text-center">
            <div class="inline-flex items-center bg-green-100 rounded-full px-6 py-3">
                <i class="fas fa-shield-alt text-green-600 mr-2"></i>
                <span class="text-green-800 font-semibold">30-Day Money Back Guarantee</span>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-gradient-to-br from-slate-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div>
                <div class="inline-flex items-center bg-blue-100 rounded-full px-6 py-2 mb-6">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                    <span class="text-blue-800 font-semibold">About MidasTech</span>
                </div>
                
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">
                    Pioneering the Future of SaaS
                </h2>
                
                <p class="text-xl text-slate-600 mb-8 leading-relaxed">
                    MidasTech is at the forefront of multi-tenant SaaS innovation, providing businesses with secure, scalable, and customizable solutions that drive growth and efficiency.
                </p>
                
                <div class="space-y-6 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2">Expert Team</h3>
                            <p class="text-slate-600">Our experienced developers and architects ensure your platform runs smoothly and securely.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-award text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2">Proven Results</h3>
                            <p class="text-slate-600">Trusted by thousands of businesses worldwide with 99.9% uptime and exceptional performance.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-rocket text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2">Innovation Focus</h3>
                            <p class="text-slate-600">Continuously evolving our platform with cutting-edge features and technologies.</p>
                        </div>
                    </div>
                </div>
                
                <a href="/demo-setup" class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    <i class="fas fa-play mr-3"></i>
                    Experience MidasTech
                </a>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center hover-lift">
                    <div class="text-3xl font-bold gradient-text mb-2">10,000+</div>
                    <div class="text-slate-600">Active Users</div>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center hover-lift">
                    <div class="text-3xl font-bold gradient-text mb-2">99.9%</div>
                    <div class="text-slate-600">Uptime</div>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center hover-lift">
                    <div class="text-3xl font-bold gradient-text mb-2">500+</div>
                    <div class="text-slate-600">Companies</div>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center hover-lift">
                    <div class="text-3xl font-bold gradient-text mb-2">24/7</div>
                    <div class="text-slate-600">Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-flex items-center bg-white/10 backdrop-blur-md rounded-full px-6 py-2 mb-6 border border-white/20">
                <i class="fas fa-envelope text-blue-300 mr-2"></i>
                <span class="text-white font-semibold">Get In Touch</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Have questions? Need a custom solution? Our team is here to help you succeed.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                <h3 class="text-2xl font-bold text-white mb-6">Send us a message</h3>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-white mb-2 font-medium">First Name</label>
                            <input type="text" class="w-full bg-white/20 border border-white/30 rounded-xl px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:border-blue-400 transition-colors duration-300" placeholder="John">
                        </div>
                        <div>
                            <label class="block text-white mb-2 font-medium">Last Name</label>
                            <input type="text" class="w-full bg-white/20 border border-white/30 rounded-xl px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:border-blue-400 transition-colors duration-300" placeholder="Doe">
                        </div>
                    </div>
                    <div>
                        <label class="block text-white mb-2 font-medium">Email</label>
                        <input type="email" class="w-full bg-white/20 border border-white/30 rounded-xl px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:border-blue-400 transition-colors duration-300" placeholder="john@company.com">
                    </div>
                    <div>
                        <label class="block text-white mb-2 font-medium">Company</label>
                        <input type="text" class="w-full bg-white/20 border border-white/30 rounded-xl px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:border-blue-400 transition-colors duration-300" placeholder="Your Company">
                    </div>
                    <div>
                        <label class="block text-white mb-2 font-medium">Message</label>
                        <textarea rows="4" class="w-full bg-white/20 border border-white/30 rounded-xl px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:border-blue-400 transition-colors duration-300 resize-none" placeholder="Tell us about your project..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                    <h3 class="text-2xl font-bold text-white mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-blue-300"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Address</h4>
                                <p class="text-blue-100">Tech Park, Innovation Hub<br>Bangalore, Karnataka 560001</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-green-300"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Phone</h4>
                                <p class="text-blue-100">+91 98765 43210</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-purple-300"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Email</h4>
                                <p class="text-blue-100">contact@midastech.in</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                    <h3 class="text-2xl font-bold text-white mb-6">Quick Demo</h3>
                    <p class="text-blue-100 mb-6">Ready to see MidasTech in action? Set up your free demo in minutes!</p>
                    <a href="/demo-setup" class="block w-full text-center bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white py-4 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        <i class="fas fa-rocket mr-3"></i>
                        Start Free Demo Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection