@extends('layouts.app')

@section('content')
<div class="py-12 text-white">
    <div class="mb-4">Welcome, HR!</div>
    <div class="space-x-4">
        <a href="{{ route('staff.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Staff Member</a>
        <a href="{{ route('staff.index') }}" class="bg-green-600 text-white px-4 py-2 rounded">View Staff Members</a>
    </div>
</div>
@endsection
