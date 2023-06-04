<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

#Manage Post
Route::get('/post-create', [PostController::class, 'create'])->name('post.create');
Route::post('/post-store', [PostController::class, 'store'])->name('post.store');
Route::get('/post-list', [PostController::class, 'list'])->name('post.list');
Route::get('/post-view/{id}', [PostController::class, 'view'])->name('post.view');

#Manage Review
Route::post('/review-store', [PostController::class, 'reviewstore'])->name('review.store');
