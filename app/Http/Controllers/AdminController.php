<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return view('admin.dashboard', compact('users')); ; 
    }

    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('admin.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'is_admin' => 'required|in:0,1', // tambahkan validasi ini
    ]);

    $user = User::findOrFail($id);
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'is_admin' => $request->is_admin,
    ]);

    return redirect()->route('admin.dashboard')->with('success', 'User berhasil diperbarui');
}

    // Tampilkan form tambah user
public function create()
{
    return view('admin.create');
}

// Simpan user baru
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
        'is_admin' => 'required|in:0,1',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'is_admin' => $request->is_admin
    ]);

    return redirect()->route('admin.dashboard')->with('success', 'User berhasil ditambahkan');
}

}
