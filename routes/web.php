<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TaoBang;
Route::get('/', [TaoBang::class,'createTable']);
