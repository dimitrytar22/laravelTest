@extends('layouts.main')

@section('title')
    Post [id:{{$post->id}}]
@endsection

@section('content')
    <a href="{{route('posts.index')}}">Back</a>
    <div> 
        <span>Post id: {{$post->id}}</span><br>
        <span>Post title: {{$post->title}}</span><br>
        <span>Post content: {{$post->content}}</span><br>
        <span>Category: {{$post->category->name}}</span><br>
        <span>Tags: 
            @foreach ($post->tags as $tag)
                #{{$tag->title}}
            @endforeach
        </span>
        {{'End of all'}}
    </div>
    <a href="{{route('posts.edit', $post)}}">Edit post</a>
@endsection

