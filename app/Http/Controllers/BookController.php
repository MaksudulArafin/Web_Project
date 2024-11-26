<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;



class BookController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function index(Request $request){

        if($request -> has('search')){
                $books = Book::where('title','like','%'.$request->search.'%')
                ->orWhere('id','like','%'.$request->search.'%')
                ->orWhere('author','like','%'.$request->search.'%')
                ->paginate(10)
                ->appends(['search' => $request->search]); // Append search query
        }

        else{
            $books = Book::paginate(15);
        }

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

    public function create(){


        return view('books.create');

    }

    public function store(Request $request){

        $rules = [
            'title' => 'required',
            'author'=> 'required',
            'isbn' => 'required | max:13',
            'stock' => 'required |numeric|integer|gte:0',
            'price' => 'required | numeric'
        ];

        $messages = [
            'stock.gte' => "The stock must be greater than or equal to 0(Zero)"
        ];

        $request ->validate($rules,$messages);

        $book = Book::create($request->all());
        return redirect()->Route('books.show',$book->id);
        // return view('books.show')
        // ->with('book',$book);
    }


    public function destroy(Request $request, $id){

        $book = Book::find($id);
        $book -> delete();

        return redirect()->back();
    }

    public function edit($id){

        $book = Book::find($id);

        return view('books.edit')
            ->with('book',$book);
    }

    public function update(Request $request){
        $rules = [
            'title' => 'required',
            'author'=> 'required',
            'isbn' => 'required | max:13',
            'stock' => 'required |numeric|integer|gte:0',
            'price' => 'required | numeric'
        ];

        $messages = [
            'stock.gte' => "The stock must be greater than or equal to 0(Zero)"
        ];

        $request ->validate($rules,$messages);

        $book = Book::find($request->id);

        $book->title = $request->title;
          $book->author = $request->author;
            $book->isbn = $request->isbn;
              $book->stock = $request->stock;
                $book->price = $request->price;
                $book->save();

                return redirect()->route('books.show',$book->id);

        // echo '<pre>';
        // print_r($request->all());
        //  echo '</pre>';
    }
}
