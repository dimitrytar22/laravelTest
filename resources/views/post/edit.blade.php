@extends('layouts.main')

@section('title')
    Editing [id: {{$post->id}}]
@endsection

@section('content')
    <a href="{{route('posts.index')}}">Back</a>
    <div>
        <form action="{{ route('posts.update', $post) }}" method="post">
            @csrf
            @method('patch')
            <span>Title: </span><input type="text" name="title" value="{{$post->title}}"><br>
            <span>Content: </span><textarea name="content" rows="10" cols="50">{{$post->content}}</textarea><br>
            <span>Category: </span><select name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" 
                        @if($post->category->id === $category->id) 
                             {{'selected'}} 
                        @endif
                        >{{$category->name}}</option>
                @endforeach
            </select><br>
            <span>Tag: </span><select name="tag_id[]" multiple>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}" 
                        @foreach ($post->tags as $post_tag)
                            @if($post_tag->id === $tag->id)
                                {{'selected'}}
                            @endif
                        @endforeach
                    >{{$tag->title}}</option>
                @endforeach
            </select><br>
            <button type="submit">Save</button>
        </form>
        <form action="{{route('posts.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection