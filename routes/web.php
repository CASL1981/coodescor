<?php

use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TagsController;
use App\Models\Noticia;
use App\Models\Post;
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
// });
Route::get('/', [PagesController::class, 'Home']);

Route::get('/dashboard', function () {
    $posts = Post::all();
    $news = Noticia::all();
    return view('dashboard', compact('posts', 'news'));
})->middleware(['auth'])->name('dashboard');

Route::get('/blog', [PagesController::class, 'Blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'Contact'])->name('contact');
Route::get('/blog/post/{post}', [PagesController::class, 'Post'])->name('blog.post');
Route::get('/news/post/{news}', [PagesController::class, 'News'])->name('news.post');
Route::get('/about', [PagesController::class, 'About'])->name('about');
Route::get('/partner', [PagesController::class, 'Partner'])->name('partner');
Route::get('/services', [PagesController::class, 'Services'])->name('services');
Route::get('/pqrs', [PagesController::class, 'PQRS'])->name('pqrs');
Route::get('/news', [PagesController::class, 'News'])->name('news');
Route::get('/categories/{category}', [CategoriesController::class, 'show'])->name('categories.show');
Route::get('/tags/{tag}', [TagsController::class, 'show'])->name('tags.show');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('asociados', PartnerController::class);
    Route::resource('posts', PostController::class);
    Route::resource('news', NoticiaController::class);
    Route::post('posts/{post}/photos', [PhotoController::class, 'store'])->name('admin.post.photos');
    Route::put('photos/{post}', [PhotoController::class, 'destroy'])->name('admin.photos.update');
    Route::post('news/{news}/photos', [PhotoController::class, 'storeNews'])->name('admin.news.photos');
    Route::put('news/photos/{news}', [PhotoController::class, 'deleteNews'])->name('admin.news.photos.update');
});