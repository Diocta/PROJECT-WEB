<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login'); // atau 'auth.register'
})->name('login');

// Dashboard utama setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Middleware untuk user yang sudah login
Route::middleware('auth')->group(function () {
    // Profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk Admin (Pastikan middleware admin sudah dibuat)
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

});

    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    Route::get('/shop/{category}', [ShopController::class, 'category'])->name('shop.category');

// Include route auth (pastikan file `auth.php` ada di `routes/auth.php`)
require __DIR__.'/auth.php';
