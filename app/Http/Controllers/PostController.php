<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());

        Mail::to('prueba@prueba.com')->send(new PostCreateMail($post));
        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:100',
            'slug' => ['required', "unique:posts,slug,$post->id"],
            'content' => 'required',
            'category' => 'required',
        ]);

        $post->update($validatedData);

        return redirect()->route('post.show', $post)->with('success', 'Post actualizado exitosamente.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
