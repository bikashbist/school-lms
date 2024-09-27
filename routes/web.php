<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/index');
});
Route::get('/pre-k-kindergarten', [UserController::class, 'PreKindergarten'])->name('pre-k-kindergarten');
Route::get('/elementry', [UserController::class, 'Elementry'])->name('elementry');
Route::get('/middle', [UserController::class, 'Middle'])->name('middle');

Route::get('/student', function () {
    return view('student/index');
});
Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
