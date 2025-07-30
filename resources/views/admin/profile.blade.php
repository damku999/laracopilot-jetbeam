@extends('layouts.admin')

@section('title', 'Profile - User Management System')
@section('page-title', 'Profile Management')
@section('page-description', 'Manage your account settings and preferences')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Profile Info Card -->
    <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
            <div class="text-center">
                <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-2xl">{{ substr($profileData['user']['name'], 0, 1) }}</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-1">{{ $profileData['user']['name'] }}</h3>
                <p class="text-slate-600 mb-2">{{ $profileData['user']['role'] }}</p>
                <p class="text-sm text-slate-500 mb-4">{{ $profileData['user']['department'] }}</p>
                
                <button class="bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white px-6 py-2 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Change Photo
                </button>
            </div>
            
            <div class="mt-6 pt-6 border-t border-slate-200">
                <div class="space-y-3">
                    <div class="flex items-center text-sm">
                        <svg class="w-4 h-4 text-slate-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-slate-600">{{ $profileData['user']['email'] }}</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <svg class="w-4 h-4 text-slate-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-slate-600">{{ $profileData['user']['phone'] }}</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <svg class="w-4 h-4 text-slate-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                        <span class="text-slate-600">{{ $profileData['user']['location'] }}</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <svg class="w-4 h-4 text-slate-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4h3a2 2 0 012 2v1a2 2 0 01-2 2H6a2 2 0 01-2-2V9a2 2 0 012-2h2z"/>
                        </svg>
                        <span class="text-slate-600">Joined {{ date('M j, Y', strtotime($profileData['user']['joined_date'])) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Profile Settings -->
    <div class="lg:col-span-2">
        <div class="space-y-6">
            <!-- Personal Information -->
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
                <h3 class="text-lg font-semibold text-slate-800 mb-6">Personal Information</h3>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Full Name</label>
                            <input type="text" value="{{ $profileData['user']['name'] }}" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                            <input type="email" value="{{ $profileData['user']['email'] }}" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Phone Number</label>
                            <input type="tel" value="{{ $profileData['user']['phone'] }}" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Location</label>
                            <input type="text" value="{{ $profileData['user']['location'] }}" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Department</label>
                        <select class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option selected>{{ $profileData['user']['department'] }}</option>
                            <option>IT Administration</option>
                            <option>Human Resources</option>
                            <option>Sales & Marketing</option>
                            <option>Finance</option>
                        </select>
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Update Information
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Security Settings -->
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
                <h3 class="text-lg font-semibold text-slate-800 mb-6">Security Settings</h3>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Current Password</label>
                        <input type="password" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">New Password</label>
                            <input type="password" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Confirm New Password</label>
                            <input type="password" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Change Password
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Notification Preferences -->
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
                <h3 class="text-lg font-semibold text-slate-800 mb-6">Notification Preferences</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                        <div>
                            <h4 class="font-medium text-slate-800">Email Notifications</h4>
                            <p class="text-sm text-slate-600">Receive notifications via email</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" {{ $profileData['settings']['email_notifications'] ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                    
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                        <div>
                            <h4 class="font-medium text-slate-800">SMS Notifications</h4>
                            <p class="text-sm text-slate-600">Receive notifications via SMS</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" {{ $profileData['settings']['sms_notifications'] ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                    
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                        <div>
                            <h4 class="font-medium text-slate-800">Two-Factor Authentication</h4>
                            <p class="text-sm text-slate-600">Add an extra layer of security</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" {{ $profileData['settings']['two_factor_auth'] ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                    
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                        <div>
                            <h4 class="font-medium text-slate-800">Session Timeout</h4>
                            <p class="text-sm text-slate-600">Automatically log out after inactivity</p>
                        </div>
                        <select class="border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="15" {{ $profileData['settings']['session_timeout'] == 15 ? 'selected' : '' }}>15 minutes</option>
                            <option value="30" {{ $profileData['settings']['session_timeout'] == 30 ? 'selected' : '' }}>30 minutes</option>
                            <option value="60" {{ $profileData['settings']['session_timeout'] == 60 ? 'selected' : '' }}>1 hour</option>
                            <option value="120" {{ $profileData['settings']['session_timeout'] == 120 ? 'selected' : '' }}>2 hours</option>
                        </select>
                    </div>
                </div>
                
                <div class="flex justify-end mt-6">
                    <button type="submit" class="bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Save Preferences
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection