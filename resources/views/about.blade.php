@extends('layouts.app')

@section('title', 'About Us - MIDAS TECH')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-midas-dark via-midas-blue to-blue-900">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">About Us</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            For the Next Generation of Great Businesses
        </p>
    </div>
</section>

<!-- About Content Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div>
                <h2 class="text-4xl font-bold text-slate-800 mb-6">Empowering Your Business Journey</h2>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    At MIDAS by WebMonks, we understand the challenges faced by modern businesses in managing data efficiently. Our mission is to empower organizations with innovative solutions that enhance data management, streamline processes, and drive growth.
                </p>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    With a focus on quality and reliability, we are committed to delivering tools that help you succeed in a rapidly evolving landscape. Join us in shaping the future of your business!
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100">
                        <h3 class="text-xl font-semibold text-slate-800 mb-3">Our Mission</h3>
                        <p class="text-slate-600">To revolutionize insurance management through innovative technology solutions.</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100">
                        <h3 class="text-xl font-semibold text-slate-800 mb-3">Our Vision</h3>
                        <p class="text-slate-600">To be the leading platform for smart insurance management worldwide.</p>
                    </div>
                </div>
            </div>

            <!-- Image/Visual -->
            <div class="relative">
                <div class="bg-gradient-to-br from-midas-blue to-midas-dark rounded-3xl p-8 text-white">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-midas-gold to-yellow-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Quality Assurance</h3>
                        <p class="text-blue-100">We ensure the highest standards of quality in all our solutions, providing reliable and secure platforms for your business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-slate-800 mb-6">Our Core Values</h2>
            <p class="text-xl text-slate-600">The principles that guide everything we do</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-midas-blue to-midas-dark rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Innovation</h3>
                <p class="text-slate-600">Constantly pushing boundaries to deliver cutting-edge solutions.</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-midas-blue to-midas-dark rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Trust</h3>
                <p class="text-slate-600">Building lasting relationships through transparency and reliability.</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-midas-blue to-midas-dark rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Excellence</h3>
                <p class="text-slate-600">Committed to delivering the highest quality in every project.</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-midas-blue to-midas-dark rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Collaboration</h3>
                <p class="text-slate-600">Working together to achieve extraordinary results for our clients.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-slate-800 mb-6">Meet Our Team</h2>
            <p class="text-xl text-slate-600">The experts behind MIDAS TECH</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-blue-100">
                <div class="w-24 h-24 bg-gradient-to-r from-midas-blue to-midas-dark rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-2xl">
                    CTO
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-2">Chief Technology Officer</h3>
                <p class="text-midas-blue font-medium mb-4">Technology Leadership</p>
                <p class="text-slate-600">Leading our technical vision and ensuring cutting-edge solutions for our clients.</p>
            </div>

            <div class="text-center bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-blue-100">
                <div class="w-24 h-24 bg-gradient-to-r from-midas-blue to-midas-dark rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-2xl">
                    PM
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-2">Product Manager</h3>
                <p class="text-midas-blue font-medium mb-4">Product Strategy</p>
                <p class="text-slate-600">Driving product innovation and ensuring our solutions meet market needs.</p>
            </div>

            <div class="text-center bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-blue-100">
                <div class="w-24 h-24 bg-gradient-to-r from-midas-blue to-midas-dark rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-2xl">
                    CS
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-2">Customer Success</h3>
                <p class="text-midas-blue font-medium mb-4">Client Relations</p>
                <p class="text-slate-600">Ensuring our clients achieve maximum value from our platform.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-midas-blue to-midas-dark">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
        <p class="text-xl text-blue-100 mb-8">
            Join thousands of insurance professionals who trust MIDAS for their business growth.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-gradient-to-r from-midas-gold to-yellow-500 hover:from-yellow-500 hover:to-midas-gold text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Start Free Trial
            </button>
            <a href="{{ route('contact') }}" class="bg-white/20 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/30 transition-all duration-300">
                Get in Touch
            </a>
        </div>
    </div>
</section>
@endsection