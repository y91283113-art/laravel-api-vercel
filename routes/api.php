<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\SiswaController;

// Route sesuai materi Pertemuan 9 & 10
Route::apiResource('/users', UserController::class);
Route::apiResource('/api/users', UserController::class);

// Route siswa
Route::apiResource('/siswa', SiswaController::class);
Route::apiResource('/api/siswa', SiswaController::class);