{{--adding the main template--}}
@extends("layouts.main")

{{--adding external css--}}
@section('css')

    @parent

    <link rel="stylesheet" type="text/css" href="{{asset("css/profile-style.css")}}"/>

@endsection

{{--adding the main body segment of the page here--}}
@section("container")
    {{--main body starts form here--}}
    <div class="row">
        <!-- Left Side Bar starts from here -->
        <div id="profile-sidebar" class="col-md-3 col-xs-12">
            <!--left side bar profile image goes here-->
            <div class="profile-image">
                {{--                    <img class="img-circle img-responsive" src="@if(isset($user->avatar)) {{$user->avatar}} : {{asset('image/user.png')  }} ; @endif">--}}
                @if(isset($user->avatar))
                    <img class="img-circle img-responsive" src="{{$user->avatar}}">
                @else
                    <img class="img-circle img-responsive" src="{{asset('image/user.png') }}">
                @endif

            </div>
            <div class="profile-name">
                <p>{{$user->name}}</p>
            </div>
            <!--    		sidebar submenu goes here       -->
            <div class="settings-bar">
                <ul class="settings-item nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-alert"></span> Overview</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-file"></span>Create Post</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-list"></span>All Posts</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>Portfolio</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                </ul>
            </div>
        </div>

        <!--middle bar starts from here-->


        <div id="right-sidebar" class="col-md-9 col-xs-12">

            <div id="top-row" class="row row-centered">

                <div id="upcoming-contest" class="col-md-3 col-md-offset-1 col-centered">
                    <div class="title-panel">
                        <p>Upcoming Contest</p>
                    </div>
                    <div class="body-panel">
                        <p class="text-title">12/05/2018</p>
                        <p class="text-body">Intra AUST Fall 2018</p>
                    </div>
                </div>

                <div id="problem-solve" class="col-md-3 col-md-offset-1 col-centered">
                    <div class="title-panel">
                        <p>Problems Solved</p>
                    </div>
                    <div class="body-panel">
                        <p class="text-title-ps">50</p>
                    </div>
                </div>

                <div id="rank" class="col-md-3 col-md-offset-1 col-centered">
                    <div class="title-panel">
                        <p>Your Rank</p>
                    </div>
                    <div class="body-panel">
                        <p class="text-title-ps">#1</p>
                    </div>
                </div>
            </div>

            <!--bottom row of second column starts from here-->

            <div id="bottom-row" class="row">

                <div id="post-column" class="col-md-6">

                {{--Showing the blog posts--}}

                    <div id="blog-post-row">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 align="center">
                                    Latest blog Posts
                                </h4>
                            </div>
                            <ul class="list-group">

                                @foreach($blogs as $blog)

                                <li class="list-group-item">
                                    <a href="#">{{$blog->title}}</a>

                                    @if($blog->status != "PUBLISHED")
                                    <span>&emsp;&ensp;&ensp;</span>[ {{$blog->status}} ]
                                    @endif

                                    <br>
                                    Created On: {{$blog->created_at->formatLocalized('%A, %d %B, %Y')}}
                                </li>

                                @endforeach

                                <li class="list-group-item">
                                    <a href="#">রান টাইম ইরোর কেন হয়?</a>
                                    <br>
                                    Created On: 07 July, 2018
                                </li>
                                <li class="list-group-item">
                                    <a href="#">CodeBlocks কাজ করে না</a>
                                    <br>
                                    Created On: 07 July, 2018
                                </li>
                            </ul>

                        </div>

                        <a href="{{route("user.show", ["name" => $user->name, 'show' => 'blog'])}}"
                           style="color: #000; text-align: right; margin-top: -20px;margin-right:10px;display:inherit;">See
                            All</a>

                    </div>

                    {{--end showoing blog posts--}}

                    <div id="code-post-row">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h4 align="center">
                                    Latest Codes
                                </h4>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#">Big Integer কি?</a>
                                    <br>
                                    Created On: 07 July, 2018
                                </li>
                                <li class="list-group-item">
                                    <a href="#">রান টাইম ইরোর কেন হয়?</a>
                                    <br>
                                    Created On: 07 July, 2018
                                </li>
                                <li class="list-group-item">
                                    <a href="#">CodeBlocks কাজ করে না</a>
                                    <br>
                                    Created On: 07 July, 2018
                                </li>
                            </ul>

                        </div>

                        <a href="#seeall"
                           style="color: #000; text-align: right; margin-top: -20px;margin-right:10px;display:inherit;">See
                            All</a>

                    </div>

                </div>

                <div class="col-md-6">
                    <div id="forum-post-row">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4 align="center">
                                    Latest Forum Posts
                                </h4>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#">Big Integer কি?</a>
                                    <br>
                                    Created On: 07 July, 2018
                                </li>
                                <li class="list-group-item">
                                    <a href="#">রান টাইম ইরোর কেন হয়?</a>
                                    <br>
                                    Created On: 07 July, 2018
                                </li>
                                <li class="list-group-item">
                                    <a href="#">CodeBlocks কাজ করে না</a>
                                    <br>
                                    Created On: 07 July, 2018
                                </li>
                            </ul>

                        </div>

                        <a href="#seeall"
                           style="color: #000; text-align: right; margin-top: -20px;margin-right:10px;display:inherit;">See
                            All</a>

                    </div>
                </div>

                <div id="post-sidebar-right" class="col-md-3 col-md-offset-1">
                    My Categories goes here
                </div>

            </div>
        </div>
    </div>

@endsection