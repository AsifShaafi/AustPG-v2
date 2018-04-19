{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
@section("container")
    {{--main body starts form here--}}


    <div class="newpost"><h1>Create a New Post<br/></h1>


        <form method="post" action="{{route("blog.store")}}" id="blog_form">

            {{csrf_field()}}
            <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
                <label for="title">Title</label>
                @if ($errors->has('post_title'))
                    <span class="help-block">
                            <strong>{{ $errors->first('post_title') }}</strong>
                        </span>
                @endif
                <input type="text" class="form-control" id="title" name="post_title" required>
            </div>

            <div class="form-group{{ $errors->has('post_body') ? ' has-error' : '' }}">
                <label for="post_body">Body</label>
                @if ($errors->has('post_body'))
                    <span class="help-block">
                            <strong>{{ $errors->first('post_body') }}</strong>
                        </span>
                @endif

                <textarea id="summernote" name="post_body" title="body"></textarea>
                {{--@include('layouts.textEditor')--}}
                {{--<textarea class="form-control" cols="50" rows="15" id="post_body" name="post_body" required></textarea>--}}
            </div>

            <div class="btn" style="text-align: end; width: 100%;">
                <button class="btn btn-success" type="submit" name="status" value="draft">Save as Draft</button>
                <button class="btn btn-primary" type="submit" name="status" value="pending">Submit for Publish</button>
            </div>

        </form>

        <script>
            $(document).ready(function () {
                // initialising the text editor. It mandatory.
                $('#summernote').summernote({
                    height: 500
                    // height and width of the text editor
                });
            });
        </script>

    </div>
@endsection

@section("jsFiles")
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

@endsection