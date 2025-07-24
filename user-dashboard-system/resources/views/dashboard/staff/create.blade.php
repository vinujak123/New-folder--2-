@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4 text-white">Add Staff Member</h2>
    <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block font-medium text-white">Name</label>
            <input type="text" name="name" id="name" class="w-full border rounded p-2 text-black" style="color: #000;" required>
        </div>
        <div>
            <label for="designation" class="block font-medium text-white">Designation</label>
            <input type="text" name="designation" id="designation" class="w-full border rounded p-2 text-black" style="color: #000;" required>
        <div>
            <label for="type" class="block font-medium text-white">Type</label>
            <select name="type" id="type" class="w-full border rounded p-2" style="color: #000; background-color: #fff;" required>
                <option value="leader" style="color: #000; background-color: #fff;">Leader</option>
                <option value="staff" style="color: #000; background-color: #fff;">Staff</option>
            </select>
        </div>
        <div>
            <label for="photo" class="block font-medium text-white">Photo</label>
            <input type="file" name="photo" id="photo" class="w-full border rounded p-2">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Add Staff</button>
    </form>
</div>
@endsection 