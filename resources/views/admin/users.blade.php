@extends('layouts.admin')

@section('title', 'Users - User Management System')
@section('page-title', 'User Management')
@section('page-description', 'Create, edit, and manage user accounts')

@section('content')
<!-- Action Bar -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
    <div class="flex items-center space-x-4">
        <button id="createUserBtn" class="bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            Create User
        </button>
        <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-3 rounded-xl font-semibold transition-all duration-300">
            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
            </svg>
            Export
        </button>
    </div>
    
    <div class="flex items-center space-x-4">
        <div class="relative">
            <input type="text" id="searchUsers" placeholder="Search users..." 
                   class="pl-10 pr-4 py-2 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent w-64">
            <svg class="w-5 h-5 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </div>
        <select class="border border-slate-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <option>All Roles</option>
            <option>Administrator</option>
            <option>Manager</option>
            <option>Employee</option>
        </select>
    </div>
</div>

<!-- Users Table -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="text-left py-4 px-6 font-semibold text-slate-700">
                        <input type="checkbox" class="rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                    </th>
                    <th class="text-left py-4 px-6 font-semibold text-slate-700">User</th>
                    <th class="text-left py-4 px-6 font-semibold text-slate-700">Role</th>
                    <th class="text-left py-4 px-6 font-semibold text-slate-700">Department</th>
                    <th class="text-left py-4 px-6 font-semibold text-slate-700">Status</th>
                    <th class="text-left py-4 px-6 font-semibold text-slate-700">Last Login</th>
                    <th class="text-left py-4 px-6 font-semibold text-slate-700">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @foreach($users as $user)
                <tr class="hover:bg-slate-50 transition-colors duration-200">
                    <td class="py-4 px-6">
                        <input type="checkbox" class="rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mr-3">
                                <span class="text-white font-semibold text-sm">{{ substr($user['name'], 0, 1) }}</span>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900">{{ $user['name'] }}</div>
                                <div class="text-sm text-slate-500">{{ $user['email'] }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                            @if($user['role'] == 'Administrator') bg-purple-100 text-purple-800
                            @elseif($user['role'] == 'Manager') bg-blue-100 text-blue-800
                            @elseif($user['role'] == 'Supervisor') bg-green-100 text-green-800
                            @else bg-gray-100 text-gray-800
                            @endif">
                            {{ $user['role'] }}
                        </span>
                    </td>
                    <td class="py-4 px-6 text-slate-600">{{ $user['department'] }}</td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                            @if($user['status'] == 'Active') bg-green-100 text-green-800
                            @elseif($user['status'] == 'Inactive') bg-red-100 text-red-800
                            @else bg-yellow-100 text-yellow-800
                            @endif">
                            {{ $user['status'] }}
                        </span>
                    </td>
                    <td class="py-4 px-6 text-slate-600 text-sm">
                        {{ $user['last_login'] != 'Never' ? date('M j, Y g:i A', strtotime($user['last_login'])) : 'Never' }}
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200 p-1" title="Edit User">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200 p-1" title="View Profile">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-200 p-1" title="Delete User">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    <div class="bg-slate-50 px-6 py-4 border-t border-slate-200">
        <div class="flex items-center justify-between">
            <div class="text-sm text-slate-600">
                Showing 1 to 5 of 2,847 users
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-1 border border-slate-300 rounded-lg text-sm hover:bg-white transition-colors duration-200">Previous</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded-lg text-sm">1</button>
                <button class="px-3 py-1 border border-slate-300 rounded-lg text-sm hover:bg-white transition-colors duration-200">2</button>
                <button class="px-3 py-1 border border-slate-300 rounded-lg text-sm hover:bg-white transition-colors duration-200">3</button>
                <button class="px-3 py-1 border border-slate-300 rounded-lg text-sm hover:bg-white transition-colors duration-200">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- Create User Modal -->
<div id="createUserModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-3xl p-8 max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-slate-800">Create New User</h3>
            <button id="closeCreateModal" class="text-slate-400 hover:text-slate-600 transition-colors duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
                    <input type="text" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                    <input type="text" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                <input type="email" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Role</label>
                    <select class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>Select Role</option>
                        <option>Administrator</option>
                        <option>Manager</option>
                        <option>Supervisor</option>
                        <option>Employee</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Department</label>
                    <select class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>Select Department</option>
                        <option>IT</option>
                        <option>HR</option>
                        <option>Sales</option>
                        <option>Marketing</option>
                        <option>Finance</option>
                    </select>
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                <input type="password" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Confirm Password</label>
                <input type="password" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            
            <div class="flex items-center">
                <input type="checkbox" class="rounded border-slate-300 text-blue-600 focus:ring-blue-500 mr-3">
                <label class="text-sm text-slate-700">Send welcome email to user</label>
            </div>
            
            <div class="flex justify-end space-x-4 pt-6 border-t border-slate-200">
                <button type="button" id="cancelCreate" class="px-6 py-3 border border-slate-300 text-slate-700 rounded-xl font-semibold hover:bg-slate-50 transition-colors duration-300">
                    Cancel
                </button>
                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-700 text-white rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all duration-300">
                    Create User
                </button>
            </div>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    // Create User Modal
    $('#createUserBtn').click(function() {
        $('#createUserModal').removeClass('hidden').addClass('flex');
    });
    
    $('#closeCreateModal, #cancelCreate').click(function() {
        $('#createUserModal').addClass('hidden').removeClass('flex');
    });
    
    // Close modal when clicking outside
    $('#createUserModal').click(function(e) {
        if (e.target === this) {
            $(this).addClass('hidden').removeClass('flex');
        }
    });
    
    // Search functionality
    $('#searchUsers').on('input', function() {
        // Implement search logic here
        console.log('Searching for:', $(this).val());
    });
});
</script>
@endsection