<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;





Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/blog', [BlogController::class, 'index'])
    ->name('blog.index');

Route::get('/blog/{slug}', [BlogController::class, 'show'])
    ->name('blog.show');


Route::get('/work/{slug}', [WorkController::class, 'show'])->name('work.show');
Route::get('/works', [WorkController::class, 'index'])->name('works.index');



Route::get('/category', [CategoryController::class, 'index'])
    ->name('category.index');

Route::get('/category/{slug}', [CategoryController::class, 'show'])
    ->name('category.show');


Route::get('/product/{slug}', [ProductController::class, 'show'])
    ->name('product.show');


Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');





Route::post('/subscribe', [NewsletterController::class, 'store'])
    ->name('newsletter.subscribe');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

/************************************************************************************************************/

Route::get('/works/{slug}', function ($slug) {
    return redirect('/work/' . $slug, 301);
});

Route::redirect('/contacts', '/contact', 301);
Route::redirect('/portfolio', '/works', 301);
Route::redirect('/news', '/blog', 301);
Route::redirect('/articles', '/blog', 301);
Route::redirect('/pages/{any}', '/', 301)->where('any', '.*');

Route::get('/video/v.webm', function() {
    return redirect('/', 301);
});

Route::get('/video/networkstars.mp4', function() {
    return redirect('/', 301);
});

Route::get('/blog/blog-single.html', function() {
    return redirect('/', 301);
});
