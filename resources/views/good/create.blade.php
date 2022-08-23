@extends('layouts.main')

@section('title')
    Create good
@endsection

@section('content')
        <a href="{{route('goods.index')}}">Back</a>
        <form action="{{route('goods.store')}}" method="post">
            @csrf
            Name: <input type="text" name="name"><br>
            Price: <input type="number" name="price"><br>
            Category: <input type="number" name="category"><br>
            Icon: <input type="text" name="icon"><br>
            Seller: <input type="text" name="seller"><br>
            <button type="submit">Add</button>
        </form>
@endsection

