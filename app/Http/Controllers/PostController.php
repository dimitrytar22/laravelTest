<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\Tag;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post/index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('post/create', compact('categories', 'tags'));
    }

    public function store(){
        $dataPost = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'integer'
        ]);
        $dataTag = request()->validate([
            'tag_id' => 'required'
        ]);

        $newPost = Post::firstOrCreate($dataPost);
        $newPost->tags()->attach($dataTag['tag_id']);

        return redirect()->route('posts.index');
    }

    public function show(Post $post){
        return view('post/show', compact('post'));
       
    }

    public function edit(Post $post){
        $tags = Tag::all();
        $categories = Category::all();
       
        return view('post/edit', compact('post', 'tags', 'categories'));
    }

    public function update(Post $post){
        $post_tags = PostTag::where('post_id', $post->id)->get();

        $dataPost = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => 'integer'
        ]);
        $dataTag = request()->validate([
            'tag_id' => 'required'
        ]);
        $post->update($dataPost);

        $post->tags()->sync($dataTag['tag_id']);

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }
}
