<x-app-layout>
    <x-slot name="header">
        <span class="text-white">Super Admin Dashboard</span>
    </x-slot>
    @section('content')
    <div class="py-12">
        <span class="text-white">Welcome, Super Admin!</span>
        <div class="mt-6">
            <div id="users-ops">
                <h3 class="font-semibold text-blue-700 mb-2">User Operations</h3>
                <div x-data="{ open: false }">
                    <a href="#" @click="open = true" class="bg-blue-600 text-white px-4 py-2 rounded">Add User</a>
                    <a href="{{ route('users.index') }}" class="bg-green-600 text-white px-4 py-2 rounded ml-2">View Users</a>
                    <!-- Modal -->
                    <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
                        <div class="bg-white p-6 rounded shadow-lg w-full max-w-md relative text-black" style="color: #000;">
                            <!-- Close button -->
                            <button type="button" @click="open = false" class="absolute top-2 right-2 text-gray-600 hover:text-black text-2xl font-bold">&times;</button>
                            <h2 class="text-xl font-bold mb-4" style="color: #000;">Add User</h2>
                            <form method="POST" action="{{ route('users.store') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="block font-medium" style="color: #000;">Name</label>
                                    <input type="text" name="name" id="name" class="w-full border rounded p-2 bg-white text-black" style="color: #000; background: #fff;" required>
                                </div>
                                <div class="mb-4">
                                    <label for="role" class="block font-medium" style="color: #000;">Role</label>
                                    <input type="text" name="role" id="role" class="w-full border rounded p-2 bg-white text-black" style="color: #000; background: #fff;" required>
                                </div>
                                <div class="mb-4">
                                    <label for="access" class="block font-medium" style="color: #000;">Access</label>
                                    <input type="text" name="access" id="access" class="w-full border rounded p-2 bg-white text-black" style="color: #000; background: #fff;" required>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" @click="open = false" class="bg-gray-400 text-white px-4 py-2 rounded mr-2">Cancel</button>
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6" id="hr-ops">
                <h3 class="font-semibold text-green-700 mb-2">HR Department Operations</h3>
                <a href="{{ route('staff.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Staff Member</a>
                <a href="{{ route('staff.index') }}" class="bg-green-600 text-white px-4 py-2 rounded">View Staff Members</a>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>
