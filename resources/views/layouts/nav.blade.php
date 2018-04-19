
<nav class="navbar-inverse navbar-fixed-top" role="navigation">
    <div id="topNavBar" class="container">
        <div class="navbar-header" style="display:inline-block">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route("home")}}" >AUST Programming Group</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                @php $active = "class=active" @endphp

                <li @if(isset($title) && $title == "blog") {{$active}} @endif>
                    <a href="{{route("blog.index")}}" >Blog</a>
                </li>
                <li @if(isset($title) && $title == "forum") {{$active}} @endif>
                    <a href="{{route("forum")}}">Forum</a>
                </li>
                <li @if(isset($title) && $title == "contest") {{$active}} @endif>
                    <a href="{{route("contests.index")}}">Contests</a>
                </li>
                <li @if(isset($title) && $title == "upcomingEvent") {{$active}} @endif>
                    <a href="{{route("upcomingEvents.index")}}">Upcoming Events</a>
                </li>
                <li @if(isset($title) && $title == "rank") {{$active}} @endif>
                    <a href="{{route("rank.index")}}">Rank List</a>
                </li>
            </ul>


            <div class="login navbar-right">
                <ul class="navbar-nav"  style="list-style-type: none; text-decoration: none;">


                    @if (Auth::guest())
                        <li @if(isset($title) && $title == "login")  style="background: #000000; padding: 8px; margin: 8px;" @endif>
                            <a href="{{route('login')}}">
                                <span class="glyphicon glyphicon-lock"></span>
                                Login

                            </a>
                        </li>
                        <li @if(isset($title) && $title == "register")   style="background: #000000; padding: 8px; margin: 8px;"  @endif>
                            <a href="{{route('register')}}">
                                <span class="glyphicon glyphicon-user"></span>
                                Register</a>
                        </li>
                    @else
                        <li id="profile_item" class="dropdown">

                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                @if(isset(Auth::user()->avatar))
                                <img class="img-circle " width="25px" height="25px" style="display: inline-block;"
                                     src={{'/storage/' . (Auth::user()->avatar)}}>
                                &ensp;{{ Auth::user()->name }}
                                @else
                                    <img class="img-circle " width="25px" height="25px" style="display: inline-block;"
                                         src={{asset("image/user.png")}}>
                                    &ensp;{{ Auth::user()->name }}
                                @endif
                                <span class="caret"></span>
                            </a>

                            <ul id="profile-dropdown" class="dropdown-menu navbar-inverse"  role="menu">
                                <li><a href="{{route("user", ["name" => Auth::user()->name])}}">Profile</a></li>
                                <li><a href="#">Blog Posts</a></li>
                                <li><a href="#">Forum Posts</a></li>
                                <li><a href="#">Code Posts</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                    <li>
                        <a id="nav_search" data-herf="search">
                            <span class="glyphicon glyphicon-search"></span>
                            Search
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</nav>