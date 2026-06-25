<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


// Rute milik Anggota 2 (Melihat Task)
Route::get('/tasks', [TaskController::class, 'index']);

// Rute milik Anggota 1 / Kamu (Membuat Task)
Route::post('/tasks', [TaskController::class, 'store']);

// Rute milik Anggota 2 (Menghapus Task)
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);