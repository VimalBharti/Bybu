<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Join;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $joins = Join::orderBy('created_at', 'desc')->get();
        return view('home', compact('joins'));
    }

    public function newPost()
    {
        return view('newPost');
    }

    public function allPost()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('allPost', compact('posts'));
    }

    public function singlePost($id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }

    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->title_color = $request->input('title_color');
        $post->designer = $request->input('designer');
        $post->designer_link = $request->input('designer_link');
        $post->markup = $request->input('markup');
        $post->css = $request->input('css');

        $post->save();
        return redirect()->route('singlePost', $post->id);
    }
}
