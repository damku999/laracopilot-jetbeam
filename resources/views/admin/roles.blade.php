@extends('layouts.admin')

@section('title', 'Roles & Permissions - User Management System')
@section('page-title', 'Roles & Permissions')
@section('page-description', 'Manage roles and assign permissions')

@section('content')
<!-- Action Bar -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
    <div class="flex items-center space-x-4">
        <button id="createRoleBtn" class="bg-gradient-to-r from-purple-600 to-indigo-700 hover:from-purple-700 hover:to-indigo-800 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            Create Role
        </button>
        <button id="managePermissionsBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-3 rounded-xl font-semibold transition-all duration-300">
            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
            Manage Permissions
        </button>
    </div>
</div>

<!-- Roles Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    @foreach($roles as $role)
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 hover:shadow-xl transition-all duration-300">
        <div class="flex items-start justify-between mb-4">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-gradient-to-r 
                    @if($role['name'] == 'Super Administrator') from-red-500 to-red-600
                    @elseif($role['name'] == 'Administrator') from-purple-500 to-purple-600
                    @elseif($role['name'] == 'Manager') from-blue-500 to-blue-600
                    @elseif($role['name'] == 'Supervisor') from-green-500 to-green-600
                    @else from-gray-500 to-gray-600
                    @endif
                    rounded-xl flex items-center justify-center mr-3">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-slate-800">{{ $role['name'] }}</h3>
                    <p class="text-sm text-slate-500">{{ $role['users_count'] }} users</p>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200 p-1" title="Edit Role">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </button>
                <button class="text-red-600 hover:text-red-800 transition-colors duration-200 p-1" title="Delete Role">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <p class="text-slate-600 text-sm mb-4">{{ $role['description'] }}</p>
        
        <div class="mb-4">
            <h4 class="text-sm font-semibold text-slate-700 mb-2">Permissions ({{ count($role['permissions']) }})</h4>
            <div class="flex flex-wrap gap-1">
                @foreach(array_slice($role['permissions'], 0, 3) as $permission)
                <span class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-blue-100 text-blue-800">
                    {{ $permission }}
                </span>
                @endforeach
                @if(count($role['permissions']) > 3)
                <span class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-600">
                    +{{ count($role['permissions']) - 3 }} more
                </span>
                @endif
            </div>
        </div>
        
        <div class="flex justify-between items-center pt-4 border-t border-slate-200">
            <span class="text-xs text-slate-500">Created {{ date('M j, Y', strtotime($role['created_at'])) }}</span>
            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors duration-200">
                View Details
            </button>
        </div>
    </div>
    @endforeach
</div>

<!-- Permissions Overview -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
    <h3 class="text-lg font-semibold text-slate-800 mb-6">All Permissions</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($permissions as $permission)
        <div class="bg-slate-50 rounded-xl p-4 hover:bg-slate-100 transition-colors duration-200">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="font-semibold text-slate-800 text-sm">{{ $permission['name'] }}</h4>
                    <p class="text-xs text-slate-600 mt-1">{{ $permission['description'] }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200" title="Edit Permission">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Create Role Modal -->
<div id="createRoleModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-3xl p-8 max-w-3xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-slate-800">Create New Role</h3>
            <button id="closeCreateRoleModal" class="text-slate-400 hover:text-slate-600 transition-colors duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        
        <form class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Role Name</label>
                <input type="text" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Enter role name">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                <textarea rows="3" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent resize-none" placeholder="Describe the role and its responsibilities"></textarea>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-4">Permissions</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-h-60 overflow-y-auto border border-slate-200 rounded-xl p-4">
                    @foreach($permissions as $permission)
                    <div class="flex items-center">
                        <input type="checkbox" id="perm_{{ $loop->index }}" class="rounded border-slate-300 text-purple-600 focus:ring-purple-500 mr-3">
                        <label for="perm_{{ $loop->index }}" class="text-sm text-slate-700">
                            <span class="font-medium">{{ $permission['name'] }}</span>
                            <br>
                            <span class="text-xs text-slate-500">{{ $permission['description'] }}</span>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="flex justify-end space-x-4 pt-6 border-t border-slate-200">
                <button type="button" id="cancelCreateRole" class="px-6 py-3 border border-slate-300 text-slate-700 rounded-xl font-semibold hover:bg-slate-50 transition-colors duration-300">
                    Cancel
                </button>
                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-700 text-white rounded-xl font-semibold hover:from-purple-700 hover:to-indigo-800 transition-all duration-300">
                    Create Role
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Manage Permissions Modal -->
<div id="managePermissionsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-3xl p-8 max-w-4xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-slate-800">Manage Permissions</h3>
            <button id="closePermissionsModal" class="text-slate-400 hover:text-slate-600 transition-colors duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        
        <!-- Permission Matrix -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Permission</th>
                        @foreach($roles as $role)
                        <th class="text-center py-3 px-4 font-semibold text-slate-700 min-w-[120px]">{{ $role['name'] }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @foreach($permissions as $permission)
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4">
                            <div>
                                <div class="font-medium text-slate-800">{{ $permission['name'] }}</div>
                                <div class="text-sm text-slate-500">{{ $permission['description'] }}</div>
                            </div>
                        </td>
                        @foreach($roles as $role)
                        <td class="py-3 px-4 text-center">
                            <input type="checkbox" 
                                   class="rounded border-slate-300 text-green-600 focus:ring-green-500"
                                   {{ in_array($permission['name'], $role['permissions']) ? 'checked' : '' }}>
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="flex justify-end space-x-4 pt-6 border-t border-slate-200 mt-6">
            <button type="button" id="cancelPermissions" class="px-6 py-3 border border-slate-300 text-slate-700 rounded-xl font-semibold hover:bg-slate-50 transition-colors duration-300">
                Cancel
            </button>
            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-xl font-semibold hover:from-green-700 hover:to-green-800 transition-all duration-300">
                Save Changes
            </button>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Create Role Modal
    $('#createRoleBtn').click(function() {
        $('#createRoleModal').removeClass('hidden').addClass('flex');
    });
    
    $('#closeCreateRoleModal, #cancelCreateRole').click(function() {
        $('#createRoleModal').addClass('hidden').removeClass('flex');
    });
    
    // Manage Permissions Modal
    $('#managePermissionsBtn').click(function() {
        $('#managePermissionsModal').removeClass('hidden').addClass('flex');
    });
    
    $('#closePermissionsModal, #cancelPermissions').click(function() {
        $('#managePermissionsModal').addClass('hidden').removeClass('flex');
    });
    
    // Close modals when clicking outside
    $('.fixed').click(function(e) {
        if (e.target === this) {
            $(this).addClass('hidden').removeClass('flex');
        }
    });
});
</script>
@endsection