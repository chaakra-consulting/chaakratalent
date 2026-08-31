<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::group(['prefix' => 'articles', 'as'=>'articles.'], function () {
    Route::get('/', [App\Http\Controllers\ArticleController::class, 'index'])->name('index');
});
