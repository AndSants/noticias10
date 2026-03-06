<?php

use App\Http\Controllers\Web\News\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/news', [NewsController::class, 'store']);
