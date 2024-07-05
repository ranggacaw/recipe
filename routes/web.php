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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// about
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');

// contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');

// recipe
Route::get('/recipe', [App\Http\Controllers\RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe-details/{id}', [App\Http\Controllers\RecipeController::class, 'details'])->name('recipe.details');
Route::get('/recipe/{id}', [App\Http\Controllers\RecipeController::class, 'show'])->name('recipe.show');
