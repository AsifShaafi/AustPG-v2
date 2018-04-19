{{--adding the main layout--}}
@extends("layouts.main")

@section("css")
    <link rel="stylesheet" type="text/css" href="{{asset("css/forum_style.css")}}"/>
@endsection

{{--adding the main body segment of the page here--}}
@section("container")
    {{--question--}}

    <section class="Question_part py-3">
        <div class="container forum_container">
            <div class="row">

                <div class="col-lg-1 User_title">
                    <div class="details">
                        <div class="imguser">
                            @if($post->author->image == null)
                                <img src="{{asset("image/forum/user.jpg")}}" alt="user.jpg">
                            @else
                                <img src="{{$post->author->image}}" alt="user.jpg">
                            @endif

                        </div>
                        <h4>{{$post->author->name}}</h4>
                    </div>
                </div>

                <div class=" col-lg-9 question">
                    <div class="title">
                        <a href="{{route("forum.show", ['id' => '1', 'question' => "10 Kids Unaware of Their Halloween Costume"])}}">
                            <h5>{{$post->question}}</h5>
                        </a>
                        <p>
                            {{$post->body}}
                        </p>
                    </div>
                </div>

                <div class=" col-lg-2 extra">
                    <div class="shape1">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </div>
                    <div class="shape2">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <span>&ensp;{{$post->views}}</span>
                    </div>
                    <div class="shape3">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <small>
                            <span>&ensp;{{$post->created_at->formatLocalized('%A, %d %B, %Y')}}</span>
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- reply -->
    <section class="Question_part py-3">
        <div class="container forum_container py-2">
            <div class="row">

                <div class="col-lg-1 User_title">
                    <div class="details">
                        <div class="imguser">
                            <img src="{{asset("image/forum/avatar2.jpg")}}" alt="avatar2.jpg">
                        </div>
                    </div>
                </div>

                <div class=" col-lg-11 question">
                    <div class="title">
                        <p style="color: black;">Typography helps you engage your audience and establish a distinct, unique personality on
                            your website. Knowing how to use fonts to build character in your design is a powerful
                            skill, and exploring the history and use of typefaces, as well as typogra..</p>
                    </div>
                </div>
            </div>

            <!-- like dislike part -->
            <div class="row">
                <div class="col-lg-2 like col-lg-offset-1">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                </div>

                <div class="col-lg-4 col-lg-offset-2">
                    <div class="postingdetails">
                        <p style="color: black;">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            Posted on :
                            <span style="color: red;"> 20 Nov @ 9:30am</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-2 col-lg-offset-1 share">
                    <a href="#"><i class="fa fa-share" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-flag" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
    </section>

    <!-- reply 2 -->
    <section class="Question_part py-3">
        <div class="container forum_container py-2">
            <div class="row">

                <div class="col-lg-1 User_title">
                    <div class="details">
                        <div class="imguser">
                            <img src="images/avatar3.jpg" alt="avatar3.jpg">
                        </div>
                    </div>
                </div>

                <div class=" col-lg-11 question">
                    <div class="title">
                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your
                            prerogative.Today, we're looking at three particularly interesting stories. Pinterest added
                            a new location-based feature on Wednesday that uses Place Pins as a way to map out vacations
                            and favorite areas. Southwest Airlines is providing Wi-Fi access from gate to gate for $8
                            per day through an onboard hotspot. And in an effort to ramp up its user base, Google Wallet
                            is offering a debit card that can take out cash from.</p>
                    </div>
                </div>
            </div>

            <!-- like dislike part -->
            <div class="row">
                <div class="col-lg-6 like">


                </div>


                <div class="col-lg-4 post">
                    <div class="postingtime"><i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <div class="postingdetails">
                        <p> Posted on : <span> 20 Nov @ 9:30am</span></p>
                    </div>
                </div>

                <div class="col-lg-2 share">
                    <a href="#"><i class="fa fa-share" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-flag" aria-hidden="true"></i></a>
                </div>

            </div>


        </div>
    </section>
    <!-- reply or comment box -->
    <section class="Question_part py-5">
        <div class="container forum_container py-3">
            <div class="row">

                <div class="col-lg-1 User_title">
                    <div class="details">
                        <div class="imguser">
                            <img src="images/avatar3.jpg" alt="avatar3.jpg">
                        </div>
                    </div>
                </div>

                <!-- comment box -->
                <div class="col-lg-10 comment_box">
                    <textarea placeholder="type your message" name="" id="" cols="20" rows="4"></textarea>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-1">
                </div>

                <div class="col-lg-9">
                    <form action="">
                        <input type="radio" name="right" value="right"> email me if some one posted a reply
                    </form>
                </div>

                <div class="col-lg-2">
                    <button class="form_btn float-right" type="submit">
                        submit
                    </button>
                </div>

            </div>
        </div>
    </section>

@endsection