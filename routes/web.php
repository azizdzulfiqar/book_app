<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/book', [BookController::class, 'book']);
Route::get('/book/add', [BookController::class, 'add']);

Route::get('/author', [AuthorController::class, 'author'])->name('author');
Route::get('/author/add', [AuthorController::class, 'add']);
Route::post('/author/insert', [AuthorController::class, 'insert']);
Route::get('/author/edit/{id_author}', [AuthorController::class, 'edit']);
Route::post('/author/update/{id_author}', [AuthorController::class, 'update']);
Route::get('/author/hapus/{id_author}', [AuthorController::class, 'hapus']);

Route::get('/user', [UserController::class, 'user']);