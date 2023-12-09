<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', [BlogController::class, 'blogHome']);

Route::get('blog', [BlogController::class, 'index']);

Route::post('blog-post', [BlogController::class, 'stories'])->name('blog-post.stories');

Route::get('blog-edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');

Route::put('blog-update/{id}', [BlogController::class, 'update'])->name('blog.update');

Route::get('destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

// Route::get('blog-details/{id}', [BlogController, 'show']);

// Route::get('blog-output', [BlogController, 'timeline']);


