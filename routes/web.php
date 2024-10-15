<?php

use App\Livewire\InstitucionIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/institucions', InstitucionIndex::class)
->middleware('auth', 'verified')
->name('insticion.index'); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');        
    })->name('dashboard');

    Route::get('/institucions', InstitucionIndex::class)->name('insticion.index');
});
