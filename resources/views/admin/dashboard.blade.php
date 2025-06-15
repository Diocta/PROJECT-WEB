@extends('layouts.app')

@section('content')
<table class="table-auto w-full border-collapse">
            <a href="{{ route('admin.create') }}" class="bg-[#fb5849] text-black px-5 py-2 rounded-lg mb-6 inline-block hover:bg-[#e04d40] transition">
    + User
</a>

            <thead>
                <tr>
                    <th class="border px-4 py-2">Username</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Role</th>
                    <th class="border px-4 py-2">Edit</th>
                    <th class="border px-4 py-2">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">{{ $user->is_admin }}</td>
                        <td class="border px-4 py-2"><a href="{{ route('admin.edit', $user->id) }}" class="text-blue-500 hover:underline">
                                Edit
                            </a>
                        </td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('admin.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection