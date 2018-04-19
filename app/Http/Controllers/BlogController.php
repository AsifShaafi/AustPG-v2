<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public $title = 'blog';

    public function __construct()
    {
        $this->middleware("auth")->except(["index", "show"]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // home page
        $posts = Blog::latest()->published()->paginate(2);

//        dd($blogs);
        return view('blog.index', compact( 'posts'))->withTitle($this->title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // showing the blog create page
        return view('blog.create')->withTitle($this->title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = rand(0, 9) . auth()->id(). strtotime(date("Y/m/d h:m"))
            . "/" . str_replace(" ", "+", \request('post_title'));

//        dd($request, $slug);

        // creating a new blog

        // validating inputs
        $this->validate($request, [
            'post_title' => 'required|string',
            'post_body' => 'required|string',
        ]);

        // storing in database

        $newBlog = Blog::create([
            'title' => \request('post_title'),
            'slug' => $slug,
            'body' => \request('post_body'),
            'category_id' => 1,
            'author_id' => auth()->id(),
            'status' => $request->get('status')
        ]);

        if ($newBlog) {
            return redirect()->route('blog.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id, $title)
    {
//        dd($id, $title);
        $slug = $id . "/" . $title;
        $blog = Blog::where('slug', $slug) -> first();
        // displaying a single blog post
        $comments = $blog->comments;
        return view('blog.show', compact('blog', 'comments'))
            ->withTitle($this->title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
//        dd($request->body);

        $blog->addComment($request->body, \auth()->id(), $request);

//        dd($blog->title, ['id' => strstr($blog->slug, 0, strpos($blog->slug, "/")),
//            "blog" => strstr($blog->slug, strpos($blog->slug, "/"))]);

//        return redirect()->route('blog.show', ['id' => strstr($blog->slug, 0, strpos($blog->slug, "/")),
//            "title" => strstr($blog->slug, strpos($blog->slug, "/"))]);
       return redirect(url()->previous());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

}
