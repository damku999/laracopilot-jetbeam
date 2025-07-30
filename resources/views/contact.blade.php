@extends('layouts.app')

@section('title', 'Contact Us - MIDAS TECH')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-midas-dark via-midas-blue to-blue-900">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Get in Touch</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            Randomised Words Even Slightly Which Don't Look Even Slightly Believable.
        </p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-2xl border border-blue-100">
                <h2 class="text-3xl font-bold text-slate-800 mb-8">Send us a Message</h2>
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Your Name*</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-midas-blue focus:ring-2 focus:ring-midas-blue/20 transition-all duration-300 bg-white">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email Address*</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-midas-blue focus:ring-2 focus:ring-midas-blue/20 transition-all duration-300 bg-white">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-slate-700 mb-2">Your Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-midas-blue focus:ring-2 focus:ring-midas-blue/20 transition-all duration-300 bg-white">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-midas-blue focus:ring-2 focus:ring-midas-blue/20 transition-all duration-300 bg-white resize-none"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-midas-blue to-midas-dark hover:from-midas-dark hover:to-midas-blue text-white py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-lg border border-blue-100">
                    <h3 class="text-2xl font-bold text-slate-800 mb-6">Contact Information</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-midas-blue to-midas-dark rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-800 mb-1">Address</h4>
                                <p class="text-slate-600">C243, Second Floor, SoBo Center</p>
                                <p class="text-slate-600">Gala Gymkhana Road, South Bopal</p>
                                <p class="text-slate-600">Ahmedabad - 380058</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-midas-blue to-midas-dark rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-800 mb-1">Phone</h4>
                                <p class="text-slate-600">+91 80000 71413</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-midas-blue to-midas-dark rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-800 mb-1">Email</h4>
                                <p class="text-slate-600">Info@midastech.in</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-lg border border-blue-100">
                    <h3 class="text-2xl font-bold text-slate-800 mb-6">Business Hours</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-slate-600">Monday - Friday</span>
                            <span class="font-semibold text-slate-800">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-600">Saturday</span>
                            <span class="font-semibold text-slate-800">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-600">Sunday</span>
                            <span class="font-semibold text-slate-800">Closed</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-lg border border-blue-100">
                    <h3 class="text-2xl font-bold text-slate-800 mb-6">Quick Actions</h3>
                    <div class="space-y-4">
                        <button class="w-full bg-gradient-to-r from-midas-gold to-yellow-500 hover:from-yellow-500 hover:to-midas-gold text-white py-3 rounded-xl font-semibold transition-all duration-300 shadow-md hover:shadow-lg">
                            Start Free Trial
                        </button>
                        <button class="w-full bg-gradient-to-r from-midas-blue to-midas-dark hover:from-midas-dark hover:to-midas-blue text-white py-3 rounded-xl font-semibold transition-all duration-300 shadow-md hover:shadow-lg">
                            Schedule Demo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-midas-blue to-midas-dark">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Ready to grow your business?</h2>
        <p class="text-xl text-blue-100 mb-8">
            Let's connect and explore how our solutions can drive your success. Fill out the form below, and our team will get back to you shortly!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-gradient-to-r from-midas-gold to-yellow-500 hover:from-yellow-500 hover:to-midas-gold text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Get Started Today
            </button>
            <a href="{{ route('pricing') }}" class="bg-white/20 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/30 transition-all duration-300">
                View Pricing
            </a>
        </div>
    </div>
</section>
@endsection