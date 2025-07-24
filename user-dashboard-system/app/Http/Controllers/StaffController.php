<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    // Show form to add staff
    public function create()
    {
        return view('dashboard.staff.create');
    }

    // Store new staff
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'type' => 'required|in:leader,staff',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('staff_photos', 'public');
            $validated['photo'] = $path;
        }

        Staff::create($validated);

        return redirect()->route('staff.index')->with('success', 'Staff member added successfully.');
    }

    // List staff, separated by leaders and staff
    public function index()
    {
        $leaders = Staff::where('type', 'leader')->get();
        $staff = Staff::where('type', 'staff')->get();
        return view('dashboard.staff.index', compact('leaders', 'staff'));
    }
}
