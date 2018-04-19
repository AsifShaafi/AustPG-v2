<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        // showing a single user's profile
        $userName = $name;

        $user = User::user($userName)->first();

//        dd($user);

        if ($user == null){
            return abort(404);
        }

        $blogs = $user->recentBlog;

        if (Auth::user()) {
            $authUserName = Auth::user()->name;
            if ($userName == $authUserName)
                $blogs = $user->allRecentBlog;
        }


//        dd($user, $blogs);

        if ($user == null) {
            return redirect('/');
        }

        return view('auth.index', compact('user', "blogs"));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($name, $show)
    {
        $userName = $name;

        $user = User::user($userName)->first();

//        dd($user);

        if ($user == null){
            return abort(404);
        }
        if ($show == "blog") {


            $posts = $user->blog()->paginate(2);

            if (Auth::user()) {
                $authUserName = Auth::user()->name;
                if ($userName == $authUserName)
                    $posts = $user->allBlog()->paginate(2);
            }

//        dd($user, $blogs);

            return view('blog.index', compact( "posts"))->withTitle("User Blog");
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
