<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
	public function index(Request $request)
	{
		$posts = Post::orderBy('id', 'DESC')->get();
		$categories = Category::orderBy('id', 'DESC')->get();
		$current_lang = $request->session()->get('locale', 'ge');
		return view('home', [
			'current_lang' => $current_lang,
			'posts' => $posts,
			'categories' => $categories,
		]);
	}
}
