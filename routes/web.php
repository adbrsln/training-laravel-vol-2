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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//posts routes with guarded auth

Route::middleware(['auth'])->group(function () {
    Route::get('/posts', [App\Http\Controllers\Post\PostController::class, 'index'])->name('post.index');
    Route::post('/posts', [App\Http\Controllers\Post\PostController::class, 'store'])->name('post.store');
    Route::get('/posts/create', [App\Http\Controllers\Post\PostController::class, 'create'])->name('post.create');
    Route::get('/posts/{id}', [App\Http\Controllers\Post\PostController::class, 'show'])->name('post.show');
    Route::post('/posts/{id}/update', [App\Http\Controllers\Post\PostController::class, 'update'])->name('post.update');
    Route::get('/posts/{id}/delete', [App\Http\Controllers\Post\PostController::class, 'destroy'])->name('post.destroy');
});
