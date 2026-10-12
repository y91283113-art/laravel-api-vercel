<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SiswaController;

Route::apiResource('siswa', SiswaController::class);