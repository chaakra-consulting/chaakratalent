<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::group(['prefix' => 'articles', 'as'=>'articles.'], function () {
    Route::get('/', [App\Http\Controllers\ArticleController::class, 'index'])->name('index');
    Route::get('/{slug}', [App\Http\Controllers\ArticleController::class, 'show'])->name('show');
});
Route::group(['prefix'=>'auth', 'as'=>'auth.'], function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::group(['prefix'=>'admin', 'as'=>'admin.','middleware'=>AdminMiddleware::class], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix'=>'article', 'as'=>'article.'], function () {
        Route::get('/', [App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'edit'])->name('edit');
        Route::get('/create', [App\Http\Controllers\Admin\ArticleController::class, 'create'])->name('create');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'update'])->name('update');
        Route::post('/store', [App\Http\Controllers\Admin\ArticleController::class, 'store'])->name('store');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'destroy'])->name('destroy');
    });
});
