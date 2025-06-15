@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Tambah User Baru</h1>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('admin.store') }}" method="POST" class="max-w-md">
    @csrf

    <label class="block mt-4">Nama:</label>
    <input type="text" name="name" class="w-full border p-2" required>

    <label class="block mt-4">Email:</label>
    <input type="email" name="email" class="w-full border p-2" required>

    <label class="block mt-4">Password:</label>
    <input type="password" name="password" class="w-full border p-2" required>

    <label class="block mt-4">Role:</label>
    <select name="is_admin" class="w-full border p-2">
        <option value="0">User</option>
        <option value="1">Admin</option>
    </select>

    <button type="submit" class="mt-6 bg-blue-500 text-black px-4 py-2 rounded hover:bg-blue-600">
        Tambah
    </button>
</form>
@endsection
