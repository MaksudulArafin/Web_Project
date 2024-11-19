<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class,'welcome']);
Route::get('/books', ['App\Http\Controllers\BookController','index'])->name('books.index');
Route::get('/books/{id}/show',[BookController::class,'show'])->name('books.show');
