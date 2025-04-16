<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

// Route yang sudah ada
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/staff/{id}', [StaffController::class, 'show'])->name('staff.show');

// Route baru untuk halaman login
Route::get('/staff/login', [StaffController::class, 'loginForm'])->name('staff.loginForm');
Route::post('/staff/login', [StaffController::class, 'login'])->name('staff.login');

Route::get('/staff/keuangan', function () {
    return view('staff.keuangan');
})->middleware('checkRole:staff keuangan');

Route::get('/staff/akademik', function () {
    return view('staff.akademik');
})->middleware('checkRole:staff akademik');
