<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Forum;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->limit(4)->published()->get();
        $posts = Forum::latest()->limit(4)->approved()->get();

//        dd($blogs);

        return view('home.index', compact("blogs", "posts"));
    }
}
