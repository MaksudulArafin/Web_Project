<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function index(){

        $books = Book::limit(30)->get();

        return view('books.index')
                ->with('books',$books);
    }
}
