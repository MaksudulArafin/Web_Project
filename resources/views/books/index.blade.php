<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bookstore</h1>

    <table width=50% border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{$book ->id}}</td>
                <td>{{$book ->title}}</td>
                <td>{{$book ->author}}</td>
                <td>{{$book ->price}}</td>
            </tr>


        @endforeach
    </table>
</body>
</html>
