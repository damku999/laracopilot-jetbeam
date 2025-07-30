@extends('layouts.app')

@section('title', 'Oops! Something Went Wrong - MidasTech')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 flex items-center justify-center px-4">
    <div class="text-center max-w-2xl mx-auto">
        <!-- Error Icon -->
        <div class="mb-8">
            <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                </svg>
            </div>
        </div>

        <!-- Error Content -->
        <h1 class="text-4xl md:text-6xl font-bold gradient-text mb-4">Oops!</h1>
        <h2 class="text-2xl md:text-3xl font-semibold text-slate-700 mb-6">Something went wrong</h2>
        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
            We're sorry, but the page you're looking for can't be found. 
            Our SaaS platform is working hard to get you back on track!
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="/" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Go Home
            </a>
            <button onclick="history.back()" class="inline-flex items-center px-8 py-4 bg-white hover:bg-slate-50 text-slate-700 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Go Back
            </button>
        </div>

        <!-- Help Section -->
        <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-slate-200/50">
            <h3 class="text-lg font-semibold text-slate-800 mb-3">Need Help?</h3>
            <p class="text-slate-600 mb-4">Our support team is here to assist you with any issues.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="#contact" class="inline-flex items-center px-6 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg font-medium transition-all duration-300">
                    <i class="fas fa-envelope mr-2"></i>
                    Contact Support
                </a>
                <a href="/demo-setup" class="inline-flex items-center px-6 py-2 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white rounded-lg font-medium transition-all duration-300">
                    <i class="fas fa-play mr-2"></i>
                    Try Demo
                </a>
            </div>
        </div>
    </div>
</div>
@endsection