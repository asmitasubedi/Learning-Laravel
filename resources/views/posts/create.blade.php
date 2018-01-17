@extends('layouts.layout')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>Create a Post</h1>
        <hr>
        <form method="post" action="/posts">
            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title of the post">
            </div>

            <div class="form-group">
                <label for="Body">Body</label>
                <textarea id="body" class="form-control" name="body" placeholder="Enter the post"></textarea>
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            @include('layouts.error')
        </form>


    </div>
@endsection
