@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Staff Members</h2>
    <a href="{{ route('staff.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">Add Staff Member</a>
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-2">Leaders</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @forelse($leaders as $leader)
                <div class="border rounded p-4 flex items-center space-x-4">
                    @if($leader->photo)
                        <img src="{{ asset('storage/' . $leader->photo) }}" alt="{{ $leader->name }}" class="w-16 h-16 rounded-full object-cover">
                    @else
                        <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">No Photo</div>
                    @endif
                    <div>
                        <div class="font-bold">{{ $leader->name }}</div>
                        <div class="text-gray-600">{{ $leader->designation }}</div>
                    </div>
                </div>
            @empty
                <div>No leaders found.</div>
            @endforelse
        </div>
    </div>
    <div>
        <h3 class="text-xl font-semibold mb-2">Staff</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @forelse($staff as $member)
                <div class="border rounded p-4 flex items-center space-x-4">
                    @if($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-16 h-16 rounded-full object-cover">
                    @else
                        <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">No Photo</div>
                    @endif
                    <div>
                        <div class="font-bold">{{ $member->name }}</div>
                        <div class="text-gray-600">{{ $member->designation }}</div>
                    </div>
                </div>
            @empty
                <div>No staff found.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection 