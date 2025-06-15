<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Kirim email test
Route::get('/send-test-email', function () {
    Mail::raw('Ini email testing dari Laravel', function ($message) {
        $message->to('alamatemailkamu@gmail.com')
                ->subject('Testing Email');
    });

    return 'Email telah dikirim!';
});

// Redirect root ke login, atau ke home jika sudah login
Route::get('/', function () {
    return auth()->check() ? redirect('/home') : redirect()->route('login');
});

// Halaman home untuk user setelah login
Route::get('/home', function () {
    return view('home.home'); // sesuai lokasi di resources/views/home/home.blade.php
})->middleware(['auth', 'verified'])->name('home');

// Dashboard umum
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route khusus user yang sudah login dan terverifikasi
Route::middleware(['auth', 'verified'])->group(function () {
    // Profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

    // culture, dll
    Route::get('/culture', [CultureController::class, 'index'])->name('culture');
    Route::get('/culture/lifestyle', [CultureController::class, 'lifestyle'])->name('culture.lifestyle');
    Route::get('/culture/festival', [CultureController::class, 'festival'])->name('culture.festival');
    Route::get('/culture/art', [CultureController::class, 'art'])->name('culture.art');
    Route::get('/culture/traditionalclothing', [CultureController::class, 'traditionalclothing'])->name('culture.traditionalclothing');
    Route::get('/culture/localfood', [CultureController::class, 'localfood'])->name('culture.localfood');
    Route::get('/culture/pop', [CultureController::class, 'pop'])->name('culture.pop');
    Route::get('/culture/economy', [CultureController::class, 'economy'])->name('culture.economy');
    Route::get('/culture/technology', [CultureController::class, 'technology'])->name('culture.technology');

    // Shop
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    Route::get('/shop/{slug}', [ShopController::class, 'category'])->name('shop.category');

    // order
    Route::get('/order/{id}', [OrderController::class, 'show']);
    Route::post('/order', [OrderController::class, 'store']);

    // transaction

  Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction')->middleware('auth');

});


// Email Verifikasi
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

require __DIR__.'/auth.php';
