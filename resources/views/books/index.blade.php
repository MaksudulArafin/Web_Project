<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKSTORE</title>
</head>
<body>
    <h1>Bookstore</h1>

    <table width="1330" border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Details</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{$book ->id}}</td>
                <td>{{$book ->title}}</td>
                <td>{{$book ->author}}</td>
                <td>{{$book ->price}}</td>
                <td><a href="{{route('books.show',$book->id)}}">Details</a></td>
            </tr>


        @endforeach
    </table>

    {{$books->links()}}
</body>
</html>
