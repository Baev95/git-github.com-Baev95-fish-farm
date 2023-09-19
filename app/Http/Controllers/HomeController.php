<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;

class HomeController extends Controller
{
	public function index(Request $request)
	{

		//DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ["Статья 3", "Текст статьи 3"]);
		/*$posts = DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at = NULL", [NOW(), NOW()]);*/
		//DB::delete("DELETE FROM posts WHERE id = :id", ["id" => 14]);
		//$posts = DB::select("SELECT * FROM posts WHERE `id` > :id", ["id" => 2]);
		//return dump($posts);
		//return dump($posts);
		//return var_dump($posts);
		//$value = $request->server('HTTP_ACCEPT_LANGUAGE');
		$current_lang = $request->session()->get('locale', 'ge');
		//$current_lang = $request->session()->all()['locale']);
		return view('home', ['current_lang' => $current_lang]);
	}
}
