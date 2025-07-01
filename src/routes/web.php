<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/show/{id}', [ContactController::class, 'show'])->name('show');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');
