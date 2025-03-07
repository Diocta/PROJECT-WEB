@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-semibold text-center">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-4">
                <label class="block">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded" required>
            </div>

            <div class="mt-4">
                <label class="block">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>

            <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded w-full">Login</button>
        </form>

        <p class="mt-4 text-center">Belum punya akun? 
            <a href="{{ route('register') }}" class="text-blue-500">Daftar</a>
        </p>
    </div>
</div>
@endsection
