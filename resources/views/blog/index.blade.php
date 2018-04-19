{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
@section("container")
    {{--main body starts form here--}}
        <div class="row">

            <div class="col-md-8" style="margin-top: 20px;">

                <h1 style="display:inline-block;"><u>Latest Posts</u></h1>

                <a href="{{route('blog.create')}}">
                    <ol class="breadcrumb pull-right btn-primary" id="add_blog">
                        <li>Add New Topic</li>
                    </ol>
                </a>

                <div class="clearfix"></div>

                {{--createing a foreach loop to display all the blogs one by one--}}
                @if (!sizeof($posts))
                    <h4 style="margin-top: 15px;">Ups! Looks like there is no blog post yet! Why don't you <a href="{{route("blog.create")}}"><i>create
                                the first one</i></a> !</h4>
                @endif
                @foreach($posts as $post)

                    <article>
                        <h2><a href="{{route("blog.show", ['slug' => $post->slug])}}">
                                {{$post->title}}
                            </a>
                        </h2>

                        <div class="row">
                            <div class="group1 col-sm-6 col-md-6">

                                {{--author name--}}
                                <span class="glyphicon glyphicon-user"></span>
                                <span></span>
                                <a href="{{route('user', ["name"=>$post->user->name])}}">
                                    {{$post->user->name}}
                                </a>
                                <span></span>

                                {{--post tags/catagory--}}
                                <span class="glyphicon glyphicon-bookmark"></span>

                                <a href="#">{{$post->post_keywords}}</a>

                            </div>
                            <div class="group2 col-sm-6 col-md-6">
                                <span class="glyphicon glyphicon-pencil"></span>
                                <a href="{{route("blog.show", ['blog' => $post->id])}}#comments">
                                    {{count($post->comments)}} comment(s)
                                </a>

                                {{--blog creation date--}}
                                <span class="glyphicon glyphicon-time"></span>
                                {{$post->created_at->formatLocalized('%A, %d %B, %Y')}}
                            </div>
                        </div>

                        <hr>
                        <br/>

                        <p class="lead">
                            @php

                                $body = $post->body;

                                if (strlen($body) > 700) {
                                    $body = substr($body, 0, 700) . "...\n\n";

                                    $body .= '<b><a href="' . route("blog.show", ['id' => substr($post->slug, 0, strpos($post->slug, "/")),
                                     "title" => substr($post->slug, strpos($post->slug, "/"))]);
                                    $body .= '" class="text-right">{continue reading}</a></b>';
                                }

                                echo $body;

                            @endphp

                        </p>

                        <hr>
                    </article>

                @endforeach

                {{ $posts->links("layouts.pagination") }}

            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 align="center">
                            <u>Top Post</u>
                        </h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">প্রোগ্রামিং শুরুর আগে</a></li>
                        <li class="list-group-item"><a href="#">হ্যালো ওয়ার্ল্ড প্রিন্ট</a></li>
                        <li class="list-group-item"><a href="#">কন্টেস্ট করার নিয়মাবলি</a></li>
                        <li class="list-group-item"><a href="#">ইনপুট আউটপুট</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-4 col-md-offset-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            <div style="text-align: center;"><u>Top Forum Post</u></div>
                        </h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Big Integer কি?</a></li>
                        <li class="list-group-item"><a href="#">রান টাইম ইরোর কেন হয়?</a></li>
                        <li class="list-group-item"><a href="#">CodeBlocks কাজ করে না</a></li>
                    </ul>
                </div>
            </div>
        </div>

@endsection