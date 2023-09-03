<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function show($slug)
    {
        return view("pages.$slug", ['slug' => $slug]);
    }
    public function contact(Request $request)
    {

        //DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ["Статья 3", "Текст статьи 3"]);
        /*$posts = DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at = NULL", [NOW(), NOW()]);*/
        //DB::delete("DELETE FROM posts WHERE id = :id", ["id" => 14]);
        //$posts = DB::select("SELECT * FROM posts WHERE `id` > :id", ["id" => 2]);
        //return dump($posts);
        //return dump($posts);
        //return var_dump($posts);
        //$value = $request->server('HTTP_ACCEPT_LANGUAGE');
        //$current_lang = $request->session()->get('locale', 'en');
        //$current_lang = $request->session()->all()['locale']);
        $current_lang = $request->session()->get('locale', 'ge');
        //$current_lang = $request->session()->all()['locale']);
        //return view('home', ['current_lang' => $current_lang]);
        return view('contact', ['current_lang' => $current_lang]);
    }
    public function about(Request $request)
    {

        //DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ["Статья 3", "Текст статьи 3"]);
        /*$posts = DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at = NULL", [NOW(), NOW()]);*/
        //DB::delete("DELETE FROM posts WHERE id = :id", ["id" => 14]);
        //$posts = DB::select("SELECT * FROM posts WHERE `id` > :id", ["id" => 2]);
        //return dump($posts);
        //return dump($posts);
        //return var_dump($posts);
        //$value = $request->server('HTTP_ACCEPT_LANGUAGE');
        //$current_lang = $request->session()->get('locale', 'en');
        //$current_lang = $request->session()->all()['locale']);
        $current_lang = $request->session()->get('locale', 'ge');
        return view('about', ['current_lang' => $current_lang]);
    }
    public function career(Request $request)
    {

        //DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ["Статья 3", "Текст статьи 3"]);
        /*$posts = DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at = NULL", [NOW(), NOW()]);*/
        //DB::delete("DELETE FROM posts WHERE id = :id", ["id" => 14]);
        //$posts = DB::select("SELECT * FROM posts WHERE `id` > :id", ["id" => 2]);
        //return dump($posts);
        //return dump($posts);
        //return var_dump($posts);
        //$value = $request->server('HTTP_ACCEPT_LANGUAGE');
        //$current_lang = $request->session()->get('locale', 'en');
        //$current_lang = $request->session()->all()['locale']);
        $current_lang = $request->session()->get('locale', 'ge');
        return view('career', ['current_lang' => $current_lang]);
    }
    public function newsList(Request $request)
    {

        //DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ["Статья 3", "Текст статьи 3"]);
        /*$posts = DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at = NULL", [NOW(), NOW()]);*/
        //DB::delete("DELETE FROM posts WHERE id = :id", ["id" => 14]);
        //$posts = DB::select("SELECT * FROM posts WHERE `id` > :id", ["id" => 2]);
        //return dump($posts);
        //return dump($posts);
        //return var_dump($posts);
        //$value = $request->server('HTTP_ACCEPT_LANGUAGE');
        //$current_lang = $request->session()->get('locale', 'en');
        //$current_lang = $request->session()->all()['locale']);
        $current_lang = $request->session()->get('locale', 'ge');
        return view('newsList', ['current_lang' => $current_lang]);
    }
    public function news(Request $request)
    {

        //DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ["Статья 3", "Текст статьи 3"]);
        /*$posts = DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at = NULL", [NOW(), NOW()]);*/
        //DB::delete("DELETE FROM posts WHERE id = :id", ["id" => 14]);
        //$posts = DB::select("SELECT * FROM posts WHERE `id` > :id", ["id" => 2]);
        //return dump($posts);
        //return dump($posts);
        //return var_dump($posts);
        //$value = $request->server('HTTP_ACCEPT_LANGUAGE');
        //$current_lang = $request->session()->get('locale', 'en');
        //$current_lang = $request->session()->all()['locale']);
        $current_lang = $request->session()->get('locale', 'ge');
        return view('news', ['current_lang' => $current_lang]);
    }
}
