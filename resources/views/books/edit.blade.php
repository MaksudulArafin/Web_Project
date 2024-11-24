@extends('books.layout')


@section('page-content')

<legend>Update Book</legend>

<form method="post" action="{{route('books.update')}}">

    {{-- {{ csrf_field() }}  --}}
    @csrf
    <input type="hidden" name="id" value="{{$book->id}}">

    <div class="mb-2">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control is-invalid" name="title" value="{{old('title',$book->title)}}">
        <div>{{$errors->first('ttile')}}</div>
    </div>

    <div class="mb-2">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control is-invalid" name="author"  value="{{old('author',$book->author)}}">
        <div>{{$errors->first('author')}}</div>
    </div>

    <div class="mb-2">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control is-invalid" name="isbn"  value="{{old('isbn',$book->isbn)}}">
        <div>{{$errors->first('isbn')}}</div>
    </div>

    <div class="mb-2">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control is-invalid" name="stock"  value="{{old('stock',$book->stock)}}">
        <div>{{$errors->first('stock')}}</div>
    </div>

    <div class="mb-2">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control is-invalid" name="price"  value="{{old('price',$book->price)}}">
        <div>{{$errors->first('price')}}</div>
    </div>


<button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
