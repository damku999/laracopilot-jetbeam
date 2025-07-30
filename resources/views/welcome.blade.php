@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 overflow-hidden">
    <div class="absolute inset-0 bg-black/40"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-128 h-128 bg-pink-500/10 rounded-full blur-3xl animate-pulse delay-2000"></div>
    </div>

    <div class="relative z-10 text-center text-white max-w-6xl mx-auto px-4">
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-blue-200 to-purple-300 animate-fade-in">
            JetBeam Technologies
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 animate-fade-in-delay">
            Accelerating Innovation Through Advanced Technology Solutions
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-delay-2">
            <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Explore Solutions
            </button>
            <button class="bg-white/20 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/30 transition-all duration-300">
                Learn More
            </button>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gradient-to-r from-slate-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @php
                $stats = [
                    ['number' => 500, 'label' => 'Projects Completed', 'suffix' => '+'],
                    ['number' => 50, 'label' => 'Happy Clients', 'suffix' => '+'],
                    ['number' => 99.9, 'label' => 'Uptime Guarantee', 'suffix' => '%'],
                    ['number' => 24, 'label' => 'Support Available', 'suffix' => '/7']
                ];
            @endphp
            
            @foreach($stats as $stat)
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-2">
                    {{ is_numeric($stat['number']) ? number_format((float)$stat['number'], ($stat['number'] == floor($stat['number']) ? 0 : 1)) : $stat['number'] }}{{ $stat['suffix'] }}
                </div>
                <div class="text-slate-600 font-medium">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">
                Cutting-Edge <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Technology</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Harness the power of advanced technology solutions designed to propel your business into the future
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $features = [
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                        'title' => 'Lightning Fast Performance',
                        'description' => 'Experience blazing-fast speeds with our optimized infrastructure and cutting-edge technology stack.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                        'title' => 'Enterprise Security',
                        'description' => 'Bank-level security protocols protect your data with advanced encryption and multi-layer protection systems.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
                        'title' => 'AI-Powered Intelligence',
                        'description' => 'Leverage artificial intelligence and machine learning to automate processes and gain valuable insights.'
                    ]
                ];
            @endphp

            @foreach($features as $feature)
            <div class="bg-gradient-to-br from-white to-slate-50 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-slate-100 group">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $feature['icon'] !!}
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">{{ $feature['title'] }}</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">{{ $feature['description'] }}</p>
                <button class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-lg font-semibold hover:from-blue-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                    Learn More
                </button>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gradient-to-br from-slate-900 via-blue-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Services</span>
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Comprehensive technology solutions tailored to accelerate your digital transformation journey
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $services = [
                    [
                        'title' => 'Cloud Infrastructure',
                        'description' => 'Scalable cloud solutions with 99.9% uptime guarantee and enterprise-grade security.',
                        'price' => 'Starting at $299/month',
                        'features' => ['Auto-scaling', '24/7 Monitoring', 'Backup & Recovery', 'SSL Certificates']
                    ],
                    [
                        'title' => 'AI Development',
                        'description' => 'Custom AI and machine learning solutions to automate and optimize your business processes.',
                        'price' => 'Starting at $5,000/project',
                        'features' => ['Custom ML Models', 'Data Analytics', 'Predictive Insights', 'API Integration']
                    ],
                    [
                        'title' => 'Mobile Applications',
                        'description' => 'Native and cross-platform mobile apps with stunning UI/UX and robust functionality.',
                        'price' => 'Starting at $15,000/app',
                        'features' => ['iOS & Android', 'Cloud Integration', 'Push Notifications', 'Analytics Dashboard']
                    ],
                    [
                        'title' => 'Web Development',
                        'description' => 'Modern web applications built with cutting-edge frameworks and responsive design.',
                        'price' => 'Starting at $8,000/project',
                        'features' => ['Responsive Design', 'SEO Optimized', 'Fast Loading', 'CMS Integration']
                    ],
                    [
                        'title' => 'DevOps Solutions',
                        'description' => 'Streamline your development workflow with automated CI/CD pipelines and monitoring.',
                        'price' => 'Starting at $2,000/month',
                        'features' => ['CI/CD Pipelines', 'Container Management', 'Monitoring Tools', 'Security Scanning']
                    ],
                    [
                        'title' => 'Consulting Services',
                        'description' => 'Strategic technology consulting to guide your digital transformation initiatives.',
                        'price' => 'Starting at $200/hour',
                        'features' => ['Technology Audit', 'Architecture Design', 'Best Practices', 'Training & Support']
                    ]
                ];
            @endphp

            @foreach($services as $service)
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2 group">
                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-blue-300 transition-colors duration-300">{{ $service['title'] }}</h3>
                <p class="text-blue-100 mb-6 leading-relaxed">{{ $service['description'] }}</p>
                <div class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 mb-6">
                    {{ $service['price'] }}
                </div>
                <ul class="space-y-2 mb-8">
                    @foreach($service['features'] as $feature)
                    <li class="flex items-center text-blue-100">
                        <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <button class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105">
                    Get Started
                </button>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">
                    About <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">JetBeam</span>
                </h2>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Founded in 2018, JetBeam Technologies has been at the forefront of digital innovation, 
                    helping businesses transform their operations through cutting-edge technology solutions.
                </p>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Our team of expert engineers, designers, and consultants work collaboratively to deliver 
                    solutions that not only meet today's challenges but anticipate tomorrow's opportunities.
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-8">
                    @php
                        $achievements = [
                            ['number' => 6, 'label' => 'Years Experience'],
                            ['number' => 150, 'label' => 'Team Members'],
                            ['number' => 25, 'label' => 'Countries Served'],
                            ['number' => 98, 'label' => 'Client Satisfaction', 'suffix' => '%']
                        ];
                    @endphp
                    
                    @foreach($achievements as $achievement)
                    <div class="text-center">
                        <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-1">
                            {{ is_numeric($achievement['number']) ? number_format((float)$achievement['number']) : $achievement['number'] }}{{ $achievement['suffix'] ?? '' }}
                        </div>
                        <div class="text-slate-600 text-sm">{{ $achievement['label'] }}</div>
                    </div>
                    @endforeach
                </div>

                <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Meet Our Team
                </button>
            </div>
            
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-100 to-purple-100 rounded-3xl p-8 shadow-2xl">
                    <div class="bg-white rounded-2xl p-6 shadow-lg mb-6">
                        <h4 class="text-xl font-bold text-slate-800 mb-3">Our Mission</h4>
                        <p class="text-slate-600">
                            To accelerate digital transformation by delivering innovative technology solutions 
                            that empower businesses to achieve unprecedented growth and efficiency.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h4 class="text-xl font-bold text-slate-800 mb-3">Our Vision</h4>
                        <p class="text-slate-600">
                            To be the global leader in technology innovation, setting new standards for 
                            excellence in digital solutions and client success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">
                Client <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Success Stories</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Discover how we've helped businesses achieve remarkable results through innovative technology solutions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $testimonials = [
                    [
                        'name' => 'Sarah Chen',
                        'position' => 'CTO, TechFlow Inc.',
                        'company' => 'TechFlow Inc.',
                        'content' => 'JetBeam transformed our entire infrastructure. Their cloud solutions reduced our costs by 40% while improving performance dramatically.',
                        'rating' => 5,
                        'project' => 'Cloud Migration & Optimization'
                    ],
                    [
                        'name' => 'Michael Rodriguez',
                        'position' => 'Founder, StartupHub',
                        'company' => 'StartupHub',
                        'content' => 'The AI solutions developed by JetBeam have revolutionized our customer service. Response times improved by 300%.',
                        'rating' => 5,
                        'project' => 'AI Chatbot Development'
                    ],
                    [
                        'name' => 'Emily Watson',
                        'position' => 'VP of Technology, RetailMax',
                        'company' => 'RetailMax',
                        'content' => 'Outstanding mobile app development. Our user engagement increased by 250% after launching the new app.',
                        'rating' => 5,
                        'project' => 'Mobile App Development'
                    ]
                ];
            @endphp

            @foreach($testimonials as $testimonial)
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-slate-100">
                <div class="flex items-center mb-4">
                    @for($i = 1; $i <= 5; $i++)
                    <svg class="w-5 h-5 {{ $i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-slate-300' }}" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-slate-600 mb-6 leading-relaxed italic">"{{ $testimonial['content'] }}"</p>
                <div class="border-t border-slate-200 pt-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            {{ substr($testimonial['name'], 0, 1) }}
                        </div>
                        <div>
                            <div class="font-bold text-slate-800">{{ $testimonial['name'] }}</div>
                            <div class="text-slate-600 text-sm">{{ $testimonial['position'] }}</div>
                            <div class="text-blue-600 text-sm font-medium">{{ $testimonial['project'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gradient-to-br from-slate-900 via-blue-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Transform</span>?
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Let's discuss how JetBeam Technologies can accelerate your digital transformation journey
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                <h3 class="text-2xl font-bold text-white mb-6">Get In Touch</h3>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-blue-100 font-medium mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-blue-400 focus:bg-white/30 transition-all duration-300" placeholder="John">
                        </div>
                        <div>
                            <label class="block text-blue-100 font-medium mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-blue-400 focus:bg-white/30 transition-all duration-300" placeholder="Doe">
                        </div>
                    </div>
                    <div>
                        <label class="block text-blue-100 font-medium mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-blue-400 focus:bg-white/30 transition-all duration-300" placeholder="john@company.com">
                    </div>
                    <div>
                        <label class="block text-blue-100 font-medium mb-2">Company</label>
                        <input type="text" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-blue-400 focus:bg-white/30 transition-all duration-300" placeholder="Your Company">
                    </div>
                    <div>
                        <label class="block text-blue-100 font-medium mb-2">Project Type</label>
                        <select class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white focus:outline-none focus:border-blue-400 focus:bg-white/30 transition-all duration-300">
                            <option value="" class="text-slate-800">Select a service</option>
                            <option value="cloud" class="text-slate-800">Cloud Infrastructure</option>
                            <option value="ai" class="text-slate-800">AI Development</option>
                            <option value="mobile" class="text-slate-800">Mobile Applications</option>
                            <option value="web" class="text-slate-800">Web Development</option>
                            <option value="devops" class="text-slate-800">DevOps Solutions</option>
                            <option value="consulting" class="text-slate-800">Consulting</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-blue-100 font-medium mb-2">Message</label>
                        <textarea rows="4" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-blue-400 focus:bg-white/30 transition-all duration-300" placeholder="Tell us about your project..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                    <h3 class="text-2xl font-bold text-white mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Headquarters</h4>
                                <p class="text-blue-100">123 Innovation Drive<br>Tech City, TC 12345<br>United States</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Phone</h4>
                                <p class="text-blue-100">+1 (555) 123-BEAM<br>+1 (555) 123-2326</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Email</h4>
                                <p class="text-blue-100">hello@jetbeam.tech<br>support@jetbeam.tech</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                    <h3 class="text-2xl font-bold text-white mb-6">Business Hours</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-blue-100">Monday - Friday</span>
                            <span class="text-white font-medium">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-blue-100">Saturday</span>
                            <span class="text-white font-medium">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-blue-100">Sunday</span>
                            <span class="text-white font-medium">Closed</span>
                        </div>
                        <div class="border-t border-white/20 pt-3 mt-4">
                            <div class="flex justify-between">
                                <span class="text-blue-100">Emergency Support</span>
                                <span class="text-green-400 font-medium">24/7 Available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 1s ease-out;
}

.animate-fade-in-delay {
    animation: fade-in 1s ease-out 0.3s both;
}

.animate-fade-in-delay-2 {
    animation: fade-in 1s ease-out 0.6s both;
}

.w-128 {
    width: 32rem;
}

.h-128 {
    height: 32rem;
}
</style>
@endsection