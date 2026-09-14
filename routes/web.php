<?php

use App\Http\Controllers\VulnContactController;
use App\Http\Controllers\VulnUploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CVE-2025-27515: wildcard form validation bypass
Route::get('/upload', [VulnUploadController::class, 'form']);
Route::post('/upload', [VulnUploadController::class, 'store']);

// CVE-2026-48019: CRLF injection via validateEmail()
Route::get('/contact', [VulnContactController::class, 'form']);
Route::post('/contact', [VulnContactController::class, 'send']);
