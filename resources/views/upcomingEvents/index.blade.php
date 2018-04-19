{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
@section("container")
    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>
    <script src="{{url("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js")}}"></script>


    <div class="row">
        <div class="col-md-12">

            <div class="jumbotron text-center">
                <h2>Up Coming Events</h2>
            </div>

            <div class="container-fluid">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-condensed">
                                <tbody>

                                @foreach($events as $event)

                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="page-header" style="margin-top: 16px;">
                                                                <a href="{{route("upcomingEvents.show", ['event' => $event->id])}}">
                                                                    <h3 style="display: inline;">
                                                                        {{$event->event_title}}
                                                                        <small>Organized
                                                                            By {{$event->event_organizer}}</small>
                                                                    </h3>
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">

                                                            <h5 class="page-header text-danger text-left"
                                                                style="display: inline;">
                                                                Event Date: <br>{{date('h:m a d-m-Y', strtotime($event->event_date))}}
                                                            </h5>

                                                            &ensp;&ensp;&ensp;

                                                            <div style="float: right; display: inline; text-decoration: none;">

                                                                @if(Auth::guest())

                                                                    <a href="{{route('login')}}"
                                                                       style="text-decoration: none;">
                                                                        <button class="btn btn-primary"
                                                                                title="Login to join the event"
                                                                                value="Login" name="Login">
                                                                            Login
                                                                        </button>
                                                                    </a>
                                                                @endif
                                                                <select class="text-center selectpicker show-menu-arrow form-control"
                                                                        data-style="btn-primary"
                                                                        data-width="fit"
                                                                        id="event_choice{{$event->id}}"
                                                                        name="event_choice" title="Event status"
                                                                        @if(Auth::guest()) disabled @endif>

                                                                    <option data-icon="glyphicon glyphicon-thumbs-up">
                                                                        Select Option
                                                                    </option>

                                                                    <option data-icon="glyphicon glyphicon-thumbs-up">
                                                                        Going
                                                                    </option>
                                                                    <option data-icon="glyphicon glyphicon-star"
                                                                            type="submit">
                                                                        Interested
                                                                    </option>
                                                                    <option data-icon="glyphicon glyphicon-thumbs-down">
                                                                        Not Interested
                                                                    </option>

                                                                </select>

                                                                <div class="flash-message" id="added_container{{$event->id}}" style="display: none;">

                                                                    <p class="alert alert-success" id="added{{$event->id}}"></p>

                                                                </div>

                                                                {{--here are some javascript and AJAX code so that when users selectes a option from the select
                                                                    list, it directly affects the database and saves the choice in the database for the user

                                                                    Ref link: https://www.sitepoint.com/community/t/display-other-data-based-on-dropdown-selection/37679/8
                                                                    --}}


                                                                <script>

                                                                    function makeAjaxRequest{{$event->id}}(opts, token) {

                                                                        $.ajax({
                                                                            type: "POST",
                                                                            data: {
                                                                                opts: opts,
                                                                                _token: token
                                                                            },
                                                                            url: "{{route("event_add_user", ["event" => $event->id])}}",
                                                                            success: function () {
                                                                                $("#added_container{{$event->id}}").css("display", "inline");
                                                                                $('#added{{$event->id}}').html('successfully added {{$event->id}}');
                                                                            },
                                                                            error: function (errorThrown) {
                                                                                $("#added_container{{$event->id}}").css("display", "inline");
                                                                                $('#added{{$event->id}}').html("error added {{$event->id}} " + JSON.stringify(errorThrown));
                                                                                //alert(JSON.stringify(errorThrown))
                                                                                console.log(errorThrown);
                                                                            }
                                                                        });
                                                                    }


                                                                    $("#event_choice{{$event->id}}").on("change", function () {
                                                                        var selected = $(this).val();

                                                                        $("#added_container{{$event->id}}").css("display", "none");

                                                                        if (selected === "Select Option"){

                                                                            return;
                                                                        }

                                                                        var token = "{{csrf_token()}}";
                                                                        makeAjaxRequest{{$event->id}}(selected, token);
                                                                    });
                                                                </script>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="lead text-body">
                                                                @php

                                                                    $body = $event->event_details;
                                                                    if(strlen($body) > 300) {
                                                                        $body = substr($body, 0, strrpos(substr($body, 0, 300), ".") + 1);
                                                                        $body .= '<p class="text-right"><a href="' . route("upcomingEvents.show", ['event' => $event->id]);
                                                                        $body .= '" class="text-right">{continue reading}</a></p>';
                                                                    }

                                                                @endphp
                                                                {!! $body !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>


    <div id="pageNumber" class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <ul class="pagination">
                        <li><a aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a>1</a></li>
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                        <li><a>4</a></li>
                        <li><a>5</a></li>
                        <li><a aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
{{--ending the main body section--}}     