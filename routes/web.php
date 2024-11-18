<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class,'welcome']);
Route::get('/books', [BookController::class,'index']);