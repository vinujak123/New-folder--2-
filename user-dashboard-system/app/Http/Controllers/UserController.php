<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    public function create()
    {
        return view('dashboard.partials.add-user-form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'access' => 'required|string|max:255',
        ]);

        // Generate a placeholder email and default password
        $email = strtolower(str_replace(' ', '.', $validated['name'])) . '@example.com';
        $password = bcrypt('password123');

        $user = User::create([
            'name' => $validated['name'],
            'role' => $validated['role'],
            'access' => $validated['access'],
            'email' => $email,
            'password' => $password,
        ]);

        return redirect()->route('users.index')->with('success', 'User added successfully!');
    }
} 