<?php
namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserDataController extends Controller
{
    public function index()
    {
        $users = UserData::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user_data',
            'email' => 'required|email|unique:user_data',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        UserData::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'User created');
    }

    public function show(UserData $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(UserData $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, UserData $user)
    {
        $request->validate([
            'username' => 'required|unique:user_data,username,' . $user->id,
            'email' => 'required|email|unique:user_data,email,' . $user->id,
            'role' => 'required',
        ]);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated');
    }

    public function destroy(UserData $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted');
    }
}
