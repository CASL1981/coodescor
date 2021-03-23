<?php

use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('/contact', 'pages/blog', ['name' => 'contact']);
// Route::view('/blog', 'pages/blog', ['name' => 'blog']);

Route::get('/', [PagesController::class, 'Home'])->name('home');
Route::get('/blog', [PagesController::class, 'Blog'])->name('blog');
Route::get('/contacto', [PagesController::class, 'Contact'])->name('contact');
Route::get('/blog/post', [PagesController::class, 'Post'])->name('blog.post');
Route::get('/about', [PagesController::class, 'About'])->name('about');
Route::get('/partner', [PagesController::class, 'Partner'])->name('partner');