<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/send-test-email', function () {
    Mail::raw('Ini email testing dari Laravel', function ($message) {
        $message->to('alamatemailkamu@gmail.com')
                ->subject('Testing Email');
    });

    return 'Email telah dikirim!';
});

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Dashboard umum
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated routes (sudah login)
Route::middleware(['auth', 'verified'])->group(function () {
    // Profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk admin (hanya jika sudah login & is_admin = true)
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Route untuk user biasa
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    Route::get('/shop/{category}', [ShopController::class, 'category'])->name('shop.category');
});

// Email Verification Routes
Route::middleware('auth')->group(function () {
    // Menampilkan halaman verifikasi email
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    // Verifikasi email link (yang dikirim ke email)
    Route::get('/email/verify/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    // Kirim ulang link verifikasi email
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

// Auth (login, register, dsb)
require __DIR__.'/auth.php';
