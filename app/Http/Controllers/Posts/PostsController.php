<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(2);
        return view('posts.index', compact('posts'));
    }

    public function show(Request $request, $title_url)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $current_lang = $request->session()->get('locale', 'ge');
        $post = Post::where('title_url', $title_url)->firstOrFail();
        return view('posts.show', compact('posts', 'post', 'current_lang'));
    }
}
