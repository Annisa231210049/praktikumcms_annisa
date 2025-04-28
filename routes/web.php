<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramPesertaController;

Route::get('/programs', [ProgramPesertaController::class, 'showPrograms']);
Route::get('/participants', [ProgramPesertaController::class, 'showParticipants']);
Route::post('/participants/find', [ProgramPesertaController::class, 'findParticipantByName'])->name('findParticipant');

// Edit dan Update Peserta
Route::get('/participants/edit/{id}', [ProgramPesertaController::class, 'edit'])->name('participants.edit');
Route::post('/participants/update/{id}', [ProgramPesertaController::class, 'update'])->name('participants.update');

// Hapus Peserta
Route::delete('/participants/{id}', [ProgramPesertaController::class, 'destroy'])->name('participants.destroy');

Route::get('/programs/show/{programName}', [ProgramPesertaController::class, 'showProgram']);

