{{--adding the main layout--}}
@extends("layouts.main")

@section("css")
    <link rel="stylesheet" type="text/css" href="{{asset("css/forum_style.css")}}"/>
@endsection

{{--adding the main body segment of the page here--}}
@section("container")
    <section class="Question_part py-3">
        <div class="container forum_container">
            <div class="row">
                <div class="col-lg-1 User_title">
                    <div class="details">
                        <div class="imguser">
                            <img src="{{asset("image/forum/user.jpg")}}" alt="user.jpg">
                        </div>
                        <img src="{{asset("image/forum/icon1.jpg")}}" alt="icon1.jpg">
                        <img src="{{asset("image/forum/icon4.jpg")}}" alt="icon1.jpg">
                        <img src="{{asset("image/forum/icon5.jpg")}}" alt="icon1.jpg">
                        <img src="{{asset("image/forum/icon6.jpg")}}" alt="icon1.jpg">
                    </div>
                </div>

                <div class=" col-lg-9 question">
                    <div class="title">
                        <a href="comment.html"><h5>10 Kids Unaware of Their Halloween Costume</h5></a>
                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's
                            your
                            prerogative.Today, we're looking at three particularly interesting stories. Pinterest
                            added
                            a new location-based feature on Wednesday that uses Place Pins as a way to map out
                            vacations
                            and favorite areas. Southwest Airlines is providing Wi-Fi access from gate to gate for
                            $8
                            per day through an onboard hotspot. And in an effort to ramp up its user base, Google
                            Wallet
                            is offering a debit card that can take out cash from.</p>
                    </div>
                </div>

                <div class=" col-lg-2 extra">
                    <div class="shape1">
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>

                    </div>
                    <div class="shape2"><i class="fa fa-eye" aria-hidden="true"></i><span> 1232</span>
                    </div>
                    <div class="shape3">
                        <i class="fa fa-clock-o" aria-hidden="true"></i><span> 24 min</span>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- same part second time -->

    @foreach($posts as $post)

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
                            <a href="{{route("forum.show", ['id' => substr($post->slug, 0, strpos($post->slug, "/")),
                                        "question" => substr($post->slug, strpos($post->slug, "/") + 1)])}}">
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

    @endforeach
@endsection