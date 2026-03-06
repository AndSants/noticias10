<?php

use App\Http\Controllers\Web\Category\CategoryController;
use App\Http\Controllers\Web\News\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('news.index');
});

Route::resource('/news', NewsController::class);
Route::resource('categories', CategoryController::class);