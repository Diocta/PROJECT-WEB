@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('admin.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="block mt-4">Nama:</label>
        <input type="text" name="name" value="{{ $user->name }}" class="w-full border p-2">

        <label class="block mt-4">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" class="w-full border p-2">

        <label class="block mt-4">Role:</label>
        <select name="is_admin" class="w-full border p-2">
            <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>User</option>
            <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Admin</option>
        </select>

        <button type="submit" class="mt-6 bg-blue-500 text-black px-4 py-2 rounded hover:bg-blue-600">
            Simpan Perubahan
        </button>
    </form>
@endsection
