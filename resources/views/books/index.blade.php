@extends('books.layout')

@section('page-content')

    {{-- <p class="text-end">
        <a class="btn btn-primary" href="{{route('books.create')}}">Add New Book</a>
    </p> --}}

    <table width="1200" border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th colspan="3">Action</th>

        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{$book ->id}}</td>
                <td>{{$book ->title}}</td>
                <td>{{$book ->author}}</td>
                <td>{{$book ->price}}</td>
                <td><a href="{{route('books.show',$book->id)}}">Details</a></td>
                <td><a href="{{route('books.edit',$book->id)}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('books.destroy',$book->id)}}" onsubmit="return confirm('Sure?')">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-link" type="submit" value="Delete">
                    </form>
            </tr>
        @endforeach
    </table>

    {{$books->links()}}

@endsection

