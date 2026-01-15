<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 0)->orderBy('created_at', 'desc')->get();
        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:superadmin,admin,moderator',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('backend.users.index')
            ->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        // Prevent editing user with ID 0 (superadmin)
        if ($user->id === 0) {
            return redirect()->route('backend.users.index')
                ->with('error', 'Cannot edit the superadmin user.');
        }

        return view('backend.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Prevent editing user with ID 0 (superadmin)
        if ($user->id === 0) {
            return redirect()->route('backend.users.index')
                ->with('error', 'Cannot edit the superadmin user.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'role' => 'required|in:superadmin,admin,moderator',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Only update password if provided
        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('backend.users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        // Prevent deleting user with ID 0 (superadmin)
        if ($user->id === 0) {
            return redirect()->route('backend.users.index')
                ->with('error', 'Cannot delete the superadmin user.');
        }

        // Prevent deleting yourself
        if ($user->id === auth()->id()) {
            return redirect()->route('backend.users.index')
                ->with('error', 'Cannot delete your own account.');
        }

        $user->delete();

        return redirect()->route('backend.users.index')
            ->with('success', 'User deleted successfully.');
    }
}
