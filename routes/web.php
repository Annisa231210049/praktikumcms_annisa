<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramPesertaController;
use App\Http\Controllers\ParticipantController;

// Halaman Utama
Route::get('/', function () {
    return view('layout.main');
});

// Admin Resource Controller
Route::resource('participant', AdminController::class);

// Program Routes
Route::get('/programs', [Participant::class, 'showPrograms']);
Route::get('/programs/show/{programName}', [Participant::class, 'showProgram']); // Sesuaikan rute untuk nama program

// Participant Routes
Route::get('/participant', [Participant::class, 'showParticipants']);
Route::get('/participant/show/{id}', [Participant::class, 'showParticipant']); // Sesuaikan rute untuk ID peserta

// Mencari Peserta Berdasarkan Nama
Route::post('/participant/find', [Participant::class, 'findParticipantByName'])->name('findParticipant');

// Edit dan Update Peserta
Route::get('/participant/edit/{id}', [Participant::class, 'edit'])->name('participants.edit');
Route::post('/participant/update/{id}', [Participant::class, 'update'])->name('participants.update');

// Hapus Peserta
Route::delete('/participant/{id}', [Participant::class, 'destroy'])->name('participants.destroy');

