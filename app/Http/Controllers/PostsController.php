<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create post';

        return view('posts.create', compact('title'));
    }


    /**
     * @param SavePostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SavePostRequest $request)
    {
        $post = new Post($request->all());
        $post->user_id = auth()->id();
        $post->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $data = [
            'post' => $post,
            'title' => $post->title,
        ];
        return view('posts.show', $data);
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->all());

        return redirect(route('posts.show', ['id' => $post->id]));
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('home');
    }
}
