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
//route Home
Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//routes Authors

Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index'])->middleware('auth');
Route::get('/authors/new', [App\Http\Controllers\AuthorController::class, 'new'])->middleware('auth');
Route::post('/authors/add', [App\Http\Controllers\AuthorController::class, 'add'])->middleware('auth');
Route::get('/authors/{id}/edit', [App\Http\Controllers\AuthorController::class, 'edit'])->middleware('auth');
Route::post('/authors/update/{id}', [App\Http\Controllers\AuthorController::class, 'update'])->middleware('auth');
Route::delete('/authors/delete/{id}', [App\Http\Controllers\AuthorController::class, 'delete'])->middleware('auth');

//routes Books

Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->middleware('auth');
Route::get('/books/new', [App\Http\Controllers\BookController::class, 'new'])->middleware('auth');
Route::post('/books/add', [App\Http\Controllers\BookController::class, 'add'])->middleware('auth');
Route::get('/books/{id}/edit', [App\Http\Controllers\BookController::class, 'edit'])->middleware('auth');
Route::post('/books/update/{id}', [App\Http\Controllers\BookController::class, 'update'])->middleware('auth');
Route::delete('/books/delete/{id}', [App\Http\Controllers\BookController::class, 'delete'])->middleware('auth');
