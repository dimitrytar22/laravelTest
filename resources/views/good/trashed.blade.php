@extends('layouts.main')

@section('title')
    Trashed goods
@endsection

@section('content')
    <a href="{{route('goods.index')}}">Back</a>
    @foreach($trashedGoods as $trashedGood)
        <div>
            <span class="good-name">id:{{$trashedGood->id}} {{$trashedGood->name}}</span> 
            <a href="{{route('goods.restore', $trashedGood->id)}}">Restore</a><br>
        </div>
    @endforeach
@endsection