<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/switch-lang/{lang}', [App\Http\Controllers\LanguageController::class, 'Index'])->name('website-switch-lang');
Route::middleware(['locale'])->group(function () {
	Route::get('/', [App\Http\Controllers\website\HomeController::class, 'index'])->name('home');
});
