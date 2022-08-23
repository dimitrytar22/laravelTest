@extends('layouts.main')

@section('title')
    Goods
@endsection



@section('content')
    <a href="{{route('goods.create')}}">Create good</a>
    <a href="{{route('goods.trashed')}}">Trashed goods</a>
    @foreach($goods as $good)
        <div>
            <a href="{{ route('goods.show', $good->id) }}"><span class="good-name">{{$good->name}}</span></a>
        </div>
    @endforeach
@endsection

