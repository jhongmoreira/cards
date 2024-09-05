<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Messages;


Route::get('/', [Messages::class, 'index'])->name('home');
Route::get('/categoria/{categoria?}', [Messages::class, 'index'])->name('home');
// Route::get('/', [Messages::class, 'index'])->name('tipo');
Route::get('/new', [Messages::class, 'new'])->name('new');
Route::post('/store', [Messages::class, 'store'])->name('store');

