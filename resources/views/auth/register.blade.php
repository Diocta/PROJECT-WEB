@extends('layouts.app')

@section('content')
<div style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background-color: #f3f4f6;">
    <div style="background-color: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 400px;">
        <h2 style="font-size: 24px; font-weight: bold; text-align: center;">Registrasi</h2>

        @if ($errors->any())
            <div style="margin-bottom: 1rem;">
                @foreach ($errors->all() as $error)
                    <div style="color: red; font-size: 14px;">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div style="margin-top: 1rem;">
                <label>Nama</label>
                <input type="text" name="name" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-top: 1rem;">
                <label>Email</label>
                <input type="email" name="email" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-top: 1rem;">
                <label>Password</label>
                <input type="password" name="password" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-top: 1rem;">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <button type="submit" style="margin-top: 1.5rem; background-color: green; color: white; padding: 10px; width: 100%; border: none; border-radius: 5px; font-weight: bold;">Daftar</button>
        </form>

        <p style="margin-top: 1rem; text-align: center;">Sudah punya akun?
            <a href="{{ route('login') }}" style="color: blue;">Login</a>
        </p>
    </div>
</div>
@endsection
