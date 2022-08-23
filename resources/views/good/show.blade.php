@extends('layouts.main')

@section('title')
    Good [id:{{ $good->id }}]
@endsection

@section('content')
    <a href="{{route('goods.index')}}">Back</a>
        <div>
            Name: <span class="good-name">{{$good->name}}</span><br>
            Price: <span class="good-price">{{$good->price}}₴</span><br>
            Category: <span class="good-category">{{$good->category}}</span><br>
            Icon: <span class="good-icon">{{$good->icon}}</span><br>
            Seller: <span class="good-seler">{{$good->seller}}</span>
        </div>
    <a href="{{route('goods.edit', $good->id)}}">Edit</a>
@endsection