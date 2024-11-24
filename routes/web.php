<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::redirect('/', '/books');
//Route::get('/', [BookController::class,'welcome']);
Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::get('/books/{id}/show',[BookController::class,'show'])->name('books.show');
Route::get('/books/create',[BookController::class,'create'])->name('books.create');
Route::post('/books/store',[BookController::class,'store'])->name('books.store');
Route::delete('/books/{id}/delete',[BookController::class,'destroy'])->name('books.destroy');
Route::get('/books/{id}/edit',[BookController::class,'edit'])->name('books.edit');
Route::post('/books/update',[BookController::class,'update'])->name('books.update');

