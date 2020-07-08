<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Join;
use Image;
use Session;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->title_color = $request->title_color;
        $post->designer = $request->designer;
        $post->designer_link = $request->designer_link;
        $post->markup = $request->markup;
        $post->css = $request->css;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = rand(1, 100) . '_' . $image->getClientOriginalName();
            Image::make($image)->save(public_path('uploads/design/' . $filename));
            $post->image = $filename;
        }
        
        // dd($post);

        $post->save();
        Session::flash('successPost', 'Success!');
        return redirect()->back();
    }

    public function allPost()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return response()->json($posts, 200);
    }

    public function submit(Request $request) {
        $this->validate($request, [
            'instagram' => 'string',
            'dribbble' => 'string',
            'behance' => 'string',
        ]);

        $join = new Join;

        $join->instagram = $request->instagram;
        $join->dribbble = $request->dribbble;
        $join->behance = $request->behance;

        $join->save();

        return redirect()->back();
    }

}
