@extends('layouts.main')

@section('title')
    Create
@endsection

@section('content')
    <div>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <span>Title: </span><input type="text" value="{{old('title')}}" name="title"><br>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <span>Content: </span><textarea name="content">{{old('content')}}</textarea><br>
            @error('content')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <span>Category: </span><select name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                        @if(old('category_id') == $category->id)
                            {{'selected'}}
                        @endif
                    >{{$category->name}}</option>
                @endforeach
            </select><br>
            <span>Tag: </span><select name="tag_id[]" multiple>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select><br>
            @error('tag_id[]')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <button type="submit">Create</button>
        </form>
    </div>
@endsection