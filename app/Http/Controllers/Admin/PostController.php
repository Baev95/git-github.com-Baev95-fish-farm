<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('admin.post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

        return view('admin.post.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $title_url = preg_replace('/[^а-яёa-z,]/iu', '-',  $request->title_en);
        $post->title_url = $title_url;
        $post->title_en = $request->title_en;
        $post->title_ge = $request->title_ge;
        $post->img = $request->img;
        $post->text_en = $request->text_en;
        $post->text_ge = $request->text_ge;
        $post->cat_id = $request->cat_id;
        $post->language = $request->language;
        $post->save();

        return redirect()->back()->withSuccess('The news was successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

        return view('admin.post.edit', [
            'categories' => $categories,
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $title_url = preg_replace('/[^а-яёa-z,]/iu', '-',  $request->title_en);
        $post->title_url = $title_url;
        $post->title_en = $request->title_en;
        $post->title_ge = $request->title_ge;
        $post->img = $request->img;
        $post->text_en = $request->text_en;
        $post->text_ge = $request->text_ge;
        $post->cat_id = $request->cat_id;
        $post->language = $request->language;
        $post->save();

        return redirect()->back()->withSuccess('The news was successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('The news was successfully deleted!');
    }
}
