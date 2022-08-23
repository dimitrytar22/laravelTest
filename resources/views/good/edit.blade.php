@extends('layouts.main')

@section('title')
    Edit good [id:{{ $good->id }}]
@endsection

@section('content')
    <a href="{{route('goods.show', $good->id)}}">Back</a>
        <form action="{{route('goods.update', $good->id)}}" method="post">
            @csrf
            @method('patch')
            Name: <input type="text" name="name" class="good-name" value="{{$good->name}}"><br>
            Price: <input type="number" name="price" class="good-price" value="{{$good->price}}"><br>
            Category: <input type="number" name="category" class="good-category" value="{{$good->category}}"><br>
            Icon: <input type="text" name="icon" class="good-icon" value="{{$good->icon}}"><br>
            Seller: <input type="text" name="seller" class="good-seler" value="{{$good->seller}}"><br>
            <button type="submit">Save</button>
        </form>
        <form action="{{route('goods.delete', $good->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
@endsection