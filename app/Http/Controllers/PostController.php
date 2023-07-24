<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return response()->json(['success' => 'Post created successfully.']);
    }

    public function show(Request $request)
    {
        // dd($request);
        $post = Post::find($request->id);
        return response()->json($post);
    }

    public function update(Request $request)
    {
        // dd($request);
        $post = Post::find($request->post_id);
        $post->title = $request->input('edit_title');
        $post->content = $request->input('edit_content');
        $post->save();
        return response()->json(['success' => 'Post updated successfully.']);
    }

    public function destroy(Request $request)
    {
        // dd($request);
        $post = Post::find($request->id);
        $post->delete();
        return response()->json(['success' => 'Post deleted successfully.']);
    }

    public function getData(Request $request)
    {
        $jsonData = Post::all();

        return response()->json($jsonData);
    }
}
