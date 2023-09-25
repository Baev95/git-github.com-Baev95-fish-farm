<?php

// use App\Services\Localozation\LocalizationService;

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LocalizationControler;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Auth;



Auth::routes();

Route::get('/login2', [loginController::class, 'index'])->name('login2');
Route::get('/register', [loginController::class, 'index'])->name('login2');




Route::middleware(['role:admin'])->prefix('admin-panel')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('homeAdmin');

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});


Route::get("locale/{lung}", [LocalizationControler::class, "setLang"]);

Route::get('/', [HomeController::class, 'index']);




Route::get('/about', [PageController::class, "about"])->name('about');
Route::get('/contact', [PageController::class, "contact"])->name('contact');
Route::get('/news', [PageController::class, "newsList"])->name('news');
Route::get('/career', [PageController::class, "career"])->name('career');
Route::get('/fish', [PageController::class, "fish"])->name('fish');
Route::get('/fishFeed', [PageController::class, "fishFeed"])->name('fishFeed');
Route::get('/products', [PageController::class, "products"])->name('products');
Route::get('/unveiling_the_factors', [PageController::class, "unveiling_the_factors"])->name('unveiling_the_factors');
Route::get('/ecological_aquaculture', [PageController::class, "ecological_aquaculture"])->name('ecological_aquaculture');



Route::get('{title_url}',  [PostsController::class, "show"])->name('posts.single');

Route::fallback(function () {
    abort(404, "Oops, Page not found 404");
});
