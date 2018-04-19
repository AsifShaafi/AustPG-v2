<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Abdus Sayef Reyadh; CSE Batch-35, AUST; Email: sayef.reyadh@gmail.com">
    <meta name="author" content="Asif Imtiaz Shaafi; CSE Batch-35, AUST; Email: a15shaafi.209@gmail.com">
    <meta name="author" content="Sifat Ahmed; CSE Batch-35, AUST; Email: sifat.69@live.com">

    {{--<script src="{{asset("js/app.js")}}"></script>--}}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="{{asset("js/customjs.js")}}"></script><!-- Latst compiled and minified JavaScript -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">

    {{--css for the page--}}
    <link rel="stylesheet" href="{{asset("css/animated.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>--}}

    <link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}"/>
    @yield('css')

    <title>
        @if(isset($title))
            {{ucfirst($title)}} | AUST Programming Group
        @else
            AUST Programming Group
        @endif
    </title>
</head>

<body>

{{--adding navigation bar--}}
@include("layouts.nav")

{{--body container goes here--}}
<div id="mainBody" class="container">
    @yield("container")
</div>

<!--footer start from here-->

@include('layouts.footer')

</body>
</html>
