<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [TermController::class, 'index'])->name('terms.index');
Route::get('/terms/create', [TermController::class, 'create'])->name('terms.create');
Route::get('/terms/{term}/edit', [TermController::class, 'edit'])->name('terms.edit');

Route::post('/terms', [TermController::class, 'store'])->name('terms.store');

Route::put('/terms/{term}', [TermController::class, 'update'])->name('terms.update');

Route::delete('/terms/{term}', [TermController::class, 'destroy'])->name('terms.destroy');



Auth::routes();
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

