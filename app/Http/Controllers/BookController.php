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

        $books = Book::paginate(10);


        return view('books.index')
                ->with('books',$books);

    }

    //Equivalent Code
    // Using with() is equivalent to passing the data directly as an array to the view() function:

    // php
    // Copy code
    // return view('books.index', ['books' => $books]);

    public function show($id){
        $book = Book::find($id);

        return view('books.show')
                ->with('book',$book);
    }
}
