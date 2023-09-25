<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function show($slug)
    {
        return view("pages.$slug", ['slug' => $slug]);
    }
    public function contact(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $current_lang = $request->session()->get('locale', 'ge');
        return view('contact', [
            'current_lang' => $current_lang,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
    public function about(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $current_lang = $request->session()->get('locale', 'ge');
        return view('about', [
            'current_lang' => $current_lang,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
    public function fishFeed(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $current_lang = $request->session()->get('locale', 'ge');
        return view('fishFeed', [
            'current_lang' => $current_lang,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
    public function fish(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $current_lang = $request->session()->get('locale', 'ge');
        return view('fish', [
            'current_lang' => $current_lang,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
    public function products(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $current_lang = $request->session()->get('locale', 'ge');
        return view('products', [
            'current_lang' => $current_lang,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
    public function career(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $current_lang = $request->session()->get('locale', 'ge');
        return view('career', [
            'current_lang' => $current_lang,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
    public function newsList(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $current_lang = $request->session()->get('locale', 'ge');
        return view('newsList', [
            'current_lang' => $current_lang,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
