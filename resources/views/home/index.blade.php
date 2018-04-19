{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
<!-- Main Content Body starts from here -->
@section("container")
    <div class="row">

        <!--MIDDLE SIDEBAR STARTS FROM HERE -->
        <div id="midlleBar" class="col-md-6 col-md-push-3 col-xs-12">
            <div class="imageSlider">
                <div class="slider">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <!-- Set the first background image using inline CSS below. -->
                                <img src="{{asset("image/home/slide/img1.jpg")}}" alt="" class="fill">
                                <div class="carousel-caption">
                                    <h3>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h3>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the second background image using inline CSS below. -->
                                <img src="{{asset("image/home/slide/img2.jpg")}}" alt="" class="fill">
                                <div class="carousel-caption">
                                    <h2>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h2>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="{{asset("image/home/slide/img3.jpg")}}" alt="" class="fill">
                                <div class="carousel-caption">
                                    <h4>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h4>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="{{asset("image/home/slide/img4.jpg")}}" alt="" class="fill">
                                <div class="carousel-caption">
                                    <h4>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h4>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="{{asset("image/home/slide/img5.jpg")}}" alt="" class="fill">
                                <div class="carousel-caption">
                                    <h4>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>

                    </div>

                    <div class="backgroundImage" style="text-align: center">
                    </div>


                </div>
            </div>
            <!--
            <div class="practiceContest">
                <div class="practiceBar">
                    <h3>Upcoming Practice Contests</h3>
                </div>
            </div>-->
        </div>

        <!--LEFT SIDEBAR STARTS FROM HERE -->
        <div id="leftSideBar" class="col-md-3 col-xs-12 col-md-pull-6">
            <div class="eventSideBar"><!--
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a href="#" class="pull-right">See All</a>
                            <h4>Events</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="well well-sm">
                            <a href="#">Intra AUST Programming Contest Spring 2017</a>
                        </div>
                        <div class="well well-sm">
                            <a href="#">Practice Class for 1.1</a>
                        </div>
                    </div>
                </div> -->
                <div class="flag">
                    <img src="{{asset("image/home/ribbon.png")}}" alt="ribbon">
                </div>
                <div class="cup">
                    <img src="{{asset("image/home/trophy.jpg")}}">
                </div>

                <div class="points">

                    <div class="team"><img src="{{asset("image/home/team.jpg")}}">
                        <a href="#"><p>40</p></a>
                    </div>

                    <div class="ques"><img style="width: 35%" src="{{asset("image/home/question.png")}}">
                        <a href="#"><p>10</p></a>
                    </div>

                    <div class="ans" style="text-align: center;"><img style="width: 55%"
                                                                      src="{{asset("image/home/solved.jpg")}}">
                        <a href="#"><p>6</p></a>
                    </div>

                    <div class="team_name">
                        <div class="team_name1">
                            <img src="{{asset("image/home/1st.png")}}"><span id="tname">Team name</span><span id="tans">6</span><span
                                    id="tques">10</span>
                        </div>
                        <div class="team_name2">
                            <img src="{{asset("image/home/2nd.png")}}"><span id="tname">Team name</span><span id="tans">6</span><span
                                    id="tques">10</span>
                        </div>
                        <div class="team_name3">
                            <img src="{{asset("image/home/3rd.png")}}"><span id="tname">Team name</span><span id="tans">6</span><span
                                    id="tques">10</span>
                        </div>
                    </div>

                </div>

                <!--  -->


            </div>
            <div class="rankSideBar">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <b>Rank List</b>
                            <a href="#" class="pull-right">See All</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Score</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Asif</td>
                                <td>2100</td>
                            </tr>
                            <tr>
                                <td>Sayef</td>
                                <td>2000</td>
                            </tr>
                            <tr>
                                <td>Sifat</td>
                                <td>1950</td>
                            </tr>
                            <tr>
                                <td>Sifat</td>
                                <td>1950</td>
                            </tr>
                            <tr>
                                <td>Sifat</td>
                                <td>1950</td>
                            </tr>
                            <tr>
                                <td>Sifat</td>
                                <td>1950</td>
                            </tr>
                            <tr>
                                <td>Sifat</td>
                                <td>1950</td>
                            </tr>
                            <tr>
                                <td>Sifat</td>
                                <td>1950</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <!--RIGHT SIDEBAR STARTS FROM HERE -->
        <div id="rightSideBar" class="col-md-3 col-xs-12">
            <div class="loginBar" @if (Auth::user()) style="display: none "@endif>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4>
                            Login
                        </h4>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('login')}}" method="POST">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                           value="">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>

                                </div>
                                <button type="submit" class="btn btn-success">
                                    Login
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="topPostSideBar">
                <div class="panel panel-info">
                    <div class="panel-heading" align="center">
                        <h4>
                            <u>Top Post</u>
                        </h4>
                    </div>
                    <ul class="list-group">

                        @foreach($blogs as $blog)

                        <li class="list-group-item">
                            {{--<a href="{{route("blog.show", ['title' => substr($blog->slug, strpos($blog->slug, "/") + 1),'id' => substr($blog->slug, 0, strpos($blog->slug, "/")),])}}">--}}
                            <a href="{{route("blog.show", ['slug' => $blog->slug])}}">
                                {{$blog->title}}
                            </a>
                        </li>

                        @endforeach

                        <li class="list-group-item"><a href="#">হ্যালো ওয়ার্ল্ড প্রিন্ট</a></li>
                        <li class="list-group-item"><a href="#">কন্টেস্ট করার নিয়মাবলি</a></li>
                        <li class="list-group-item"><a href="#">ইনপুট আউটপুট</a></li>
                    </ul>
                </div>
            </div>
            <div class="topForumSideBar">
                <div class="panel panel-info">
                    <div class="panel-heading" align="center">
                        <h4>
                            <u>Top Forum Post</u>
                        </h4>
                    </div>
                    <ul class="list-group">

                        @foreach($posts as $post)

                        <li class="list-group-item">
                            <a href="{{route("forum.show", ['id' => substr($post->slug, 0, strpos($post->slug, "/")),
                                        "question" => substr($post->slug, strpos($post->slug, "/") + 1)])}}">
                                {{$post->question}}
                            </a>
                        </li>

                        @endforeach

                        <li class="list-group-item"><a href="#">রান টাইম ইরোর কেন হয়?</a></li>
                        <li class="list-group-item"><a href="#">CodeBlocks কাজ করে না</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection