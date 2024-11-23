@extends('books.layout')

@section('page-content')

    {{-- <p class="text-end">
        <a class="btn btn-primary" href="{{route('books.index')}}">Back</a>
    </p> --}}


    <h1>Details of the Book "{{$book->title}}"</h1>

    <table width=50% border="1">

        <tr>
            <th>Title</th>
            <td>{{$book->title}}</td>

        </tr>

        <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>

        </tr>

        <tr>
            <th>ISBN</th>
            <td>{{$book->isbn}}</td>

        </tr>

        <tr>
            <th>Stock</th>
            <td>{{$book->stock}}</td>

        </tr>

        <tr>
            <th>Price</th>
            <td>{{$book->price}}</td>

        </tr>
    </table>
@endsection
