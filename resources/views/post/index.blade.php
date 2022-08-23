@extends('layouts.main')

@section('title')
    Posts
@endsection

@section('content')
    <a href="{{route('posts.create')}}">Create post</a>
    <div>
        @foreach($posts as $post)
            <a href="{{route('posts.show', $post->id)}}"><span>ID: {{$post->id}}</span> <span>{{$post->title}}</span></a><br>
        @endforeach
    </div>
@endsection

