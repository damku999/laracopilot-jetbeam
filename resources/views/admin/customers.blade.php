@extends('layouts.admin')

@section('title', 'Customers - MIDAS TECH Admin')
@section('page-title', 'Customer Management')
@section('page-description', 'Manage your insurance customers and their information')

@section('content')
<!-- Search and Actions Bar -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 mb-6">
    <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <div class="flex-1 max-w-md">
            <div class="relative">
                <input type="text" placeholder="Search customers..." class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 focus:border-midas-blue focus:ring-2 focus:ring-midas-blue/20 transition-all duration-300">
                <svg class="w-5 h-5 text-slate-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
        <div class="flex space-x-3">
            <button class="bg-gradient-to-r from-midas-blue to-midas-dark text-white px-6 py-3 rounded-xl font-semibold hover:from-midas-dark hover:to-midas-blue transition-all duration-300 shadow-md hover:shadow-lg">
                Add Customer
            </button>
            <button class="bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-green-700 transition-all duration-300 shadow-md hover:shadow-lg">
                Export Data
            </button>
        </div>
    </div>
</div>

<!-- Customers Table -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-200">
        <h3 class="text-lg font-semibold text-slate-800">Customer List</h3>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gradient-to-r from-slate-50 to-slate-100">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Customer</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Contact</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Policies</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @foreach($customers as $customer)
                <tr class="hover:bg-slate-50 transition-colors duration-200">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-midas-blue to-midas-dark rounded-full flex items-center justify-center text-white font-semibold">
                                {{ substr($customer['name'], 0, 1) }}
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">{{ $customer['name'] }}</div>
                                <div class="text-sm text-slate-500">ID: {{ $customer['id'] }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-slate-900">{{ $customer['email'] }}</div>
                        <div class="text-sm text-slate-500">{{ $customer['phone'] }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            {{ $customer['policies'] }} Policies
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        @if($customer['status'] == 'Active')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        @elseif($customer['status'] == 'Pending')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                Inactive
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-midas-blue hover:text-midas-dark transition-colors duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-slate-200 bg-slate-50">
        <div class="flex justify-between items-center">
            <div class="text-sm text-slate-600">
                Showing 1 to {{ count($customers) }} of {{ count($customers) }} results
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-2 text-sm text-slate-600 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors duration-200">
                    Previous
                </button>
                <button class="px-3 py-2 text-sm text-white bg-midas-blue border border-midas-blue rounded-lg">
                    1
                </button>
                <button class="px-3 py-2 text-sm text-slate-600 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors duration-200">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>
@endsection