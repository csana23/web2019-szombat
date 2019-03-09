<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = \App\BlogPost::orderBy('title', 'DESC')
            ->get();

        return view('welcome', ['posts' => $posts]);
    }

    public function create()
    {
        return view('ujposzt');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required'
        ]);

        $post = new \App\BlogPost();
        $post->title = $request->get('title');
        $post->content = $request->get('content');

        $post->save();

        return redirect('/');
    }

    public function show($id)
    {
        $post = \App\BlogPost::where('id', $id)->first();

        return view('poszt', compact('post'));
    }

    public function edit($id)
    {
        $post = \App\BlogPost::findOrFail($id);

        return view('szerkesztes', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required'
        ]);

        $post = \App\BlogPost::findOrFail($id);

        $post->title = $request->get('title');
        $post->content = $request->get('content');

        $post->save();

        return redirect('/');
    }

    public function saveComment($id, Request $request)
    {
        $post = \App\BlogPost::findOrFail($id);

        $post->comments()->create([
            'comment' => $request->get('comment')
        ]);

        return back();
    }
}
