<?php

use App\Http\Controllers\VulnUploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CVE-2025-27515: wildcard form validation bypass
Route::get('/upload', [VulnUploadController::class, 'form']);
Route::post('/upload', [VulnUploadController::class, 'store']);

// CVE-2024-52301: diagnostic route to visualize environment detection flip
Route::get('/env-check', fn () => 'Current environment: '.app()->environment());

// CVE-2026-48019: CRLF Injection di Email
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function (Illuminate\Http\Request $request) {
    $validator = Illuminate\Support\Facades\Validator::make($request->all(), [
        'email' => 'required|email' // Rule email bawaan (RFCValidation)
    ]);

    if ($validator->fails()) {
        return "ditolak";
    }

    return "PASSES (lolos validasi)";
});
