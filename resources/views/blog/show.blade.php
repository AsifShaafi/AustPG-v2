@extends("layouts.main")

@section("container")

    <div class="row">
        <div class="col-md-8">


            <article>
                <h2 style="color: deepskyblue;">
                    {{$blog->title}}
                </h2>

                <hr style="border-width: 5px;">

                <div class="row">
                    <div class="group1 col-sm-6 col-md-6">
                        {{--author name--}}
                        <span class="glyphicon glyphicon-user"></span>
                        <span></span>
                        <a href="{{route('user', ["name"=>$blog->user->name])}}">
                            {{$blog->user->name}}
                        </a>
                        <span></span>

                        {{--post tags/catagory--}}
                        <span class="glyphicon glyphicon-bookmark"></span>

                        <a href="#">{{$blog->post_keywords}}</a>

                    </div>
                    <div class="group2 col-sm-6 col-md-6">
                        <span class="glyphicon glyphicon-pencil"></span>
                        <a href="#comments">
                            {{count($comments)}} comment(s)
                        </a>

                        {{--blog creation date--}}
                        <span class="glyphicon glyphicon-time"></span>
                        {{$blog->created_at->formatLocalized('%A, %d %B, %Y')}}
                    </div>
                </div>

                <hr>
                <br/>

                <p class="lead">
                    {!! $blog->body !!}
                </p>


                <hr style="background: black; height: 1px;"/>
            </article>

            <!-- comment section starts -->
            {{--comment section--}}
            <div id="comments" class="comments-area ">

                <h4 class="comments-title">

                    {{count($comments)}} thought(s) on &ldquo;<span>{{$blog->title}}</span>&rdquo;

                </h4>

                <hr style="background: black; height: 1px;"/>

                <ol class="comment-list" style="margin-left: 25px;">

                    @foreach($comments as $comment)

                        <li id="comment" class="comment even thread-even depth-1">
                            <article id="div-comment" class="comment-body">
                                <div class="comment-author vcard">
                                    <img alt=''
                                         src='https://cdn4.iconfinder.com/data/icons/fashion-icons/154/hipster-512.png'
                                         srcset='https://cdn4.iconfinder.com/data/icons/fashion-icons/154/hipster-512.png 2x'
                                         class='avatar avatar-32 photo' height='32' width='32'/> <b class="fn">

                                        <a href="{{route('user', ["name"=>$comment->user->name])}}">
                                            {{$comment->user->name}}
                                        </a>

                                    </b>
                                    <span class="says">

                                            said on
                                        {{$blog->created_at->toFormattedDateString()}} :

                            </span>
                                </div><!-- .comment-author -->

                                <div class="comment-content">
                                    <p>

                                        {{$comment->comment_text}}

                                    </p>
                                </div><!-- .comment-content -->

                                <div class="reply"><a rel='nofollow' class='comment-reply-link'
                                                      aria-label='Reply to Sayef'>Reply</a>
                                </div>
                            </article><!-- .comment-body -->
                        </li><!-- #comment-## -->

                        <hr style="height: 2px; background: cornflowerblue"/>

                    @endforeach

                </ol>

                {{--comment adding form--}}
                <div class="col-lg-9">
                    <div id="respond" class="comment-respond card-block">

                        <h3 id="reply-title" class="comment-reply-title">

                            Leave a Reply

                        </h3>

                    </div>

                    <div class="card-block" style="margin-top: -160px;">

                        <form method="post" action="{{route("blog.comment", ["blog" => $blog]) }}">

                            {{csrf_field()}}

                            <div class="form-group">

                        <textarea name="body" id="body"

                                  @if(!auth()->check())

                                  placeholder="Please Login to Give Reply"

                                  @else

                                  placeholder="Your Comments Here"

                                  @endif

                                  class="form-control comment-form" required

                                  @if(!auth()->check()) disabled @endif ></textarea>

                            </div>

                            <div class="form-group">
                                <button type="submit" name="post_type" value="BLOG" class="btn btn-primary"
                                        @if(!auth()->check()) disabled @endif >Add
                                    Comment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- comments section end -->


        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <center><u>Top Post</u></center>
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


        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <center><u>Top Forum Post</u></center>
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