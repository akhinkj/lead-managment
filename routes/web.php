<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LeadController;
use App\Http\Controllers\ImportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
Route::get('/imports', [ImportController::class, 'index'])->name('imports.index');
Route::post('/imports/upload', [ImportController::class, 'upload'])->name('imports.upload');

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile.index');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
