<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TaoBang;
use  App\Http\Controllers\PageController;
Route::get('/a', [TaoBang::class,'createTable']);
Route::get('/trangchu/main', [PageController::class,'getIndex']);
Route::get('/trangchu/product', [PageController::class,'getProduct']);