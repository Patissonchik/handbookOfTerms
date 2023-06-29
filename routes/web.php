<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermController;
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

#Route::get('/', 'TermController@index')->name('terms.index');
Route::get('/', [TermController::class, 'index'])->name('terms.index');
Route::get('/terms/create', [TermController::class, 'create'])->name('terms.create');
Route::get('/terms/{term}/edit', [TermController::class, 'edit'])->name('terms.edit');

Route::post('/terms', [TermController::class, 'store'])->name('terms.store');

Route::put('/terms/{term}', [TermController::class, 'update'])->name('terms.update');

Route::delete('/terms/{term}', [TermController::class, 'destroy'])->name('terms.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
