<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GoodController;

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


Route::get('/', [MainController::class,'index']);

Route::get('/about', [AboutController::class,'index'])->name('about.index');

Route::get('/contacts', [ContactsController::class,'index'])->name('contacts.index');

Route::get('/posts', [PostController::class,'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');

Route::post('/posts', [PostController::class,'store'])->name('posts.store');
Route::patch('/posts/{post}', [PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('posts.delete');

Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');


Route::get('/goods',[GoodController::class, 'index'])->name('goods.index');

Route::get('/goods/create',[GoodController::class, 'create'])->name('goods.create');
Route::post('/goods',[GoodController::class, 'store'])->name('goods.store');

Route::get('/goods/trashed',[GoodController::class, 'trashed'])->name('goods.trashed');
Route::get('/goods/restore/{good}',[GoodController::class, 'restore'])->name('goods.restore');

Route::get('/goods/{good}',[GoodController::class, 'show'])->name('goods.show');

Route::get('/goods/{good}/edit',[GoodController::class, 'edit'])->name('goods.edit');
Route::patch('/goods/{good}',[GoodController::class, 'update'])->name('goods.update');

Route::delete('/goods/{good}',[GoodController::class, 'destroy'])->name('goods.delete');
