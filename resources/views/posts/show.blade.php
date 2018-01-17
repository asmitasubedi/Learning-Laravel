@extends('layouts.layout')

@section('content')

    <div class="col-sm-8 blog-main">

    <h1>{{$post->title}}</h1>

        {{$post->body}}

        <hr>

        <div class="comments">
            <ul class="list-group">

                @foreach($post->comments as $comment)

                    <li class="list-group-item">

                        <strong>
                            {{$comment->created_at->diffForHumans()}}
                        </strong>

                        {{$comment->body}}

                    </li>

                @endforeach

            </ul>

            </div>

{{--        {{A Section to add comment}}--}}
        <hr>

        <div class="card">
            <div class="card-block">

            <form method="post" action="/posts/{{$post->id}}/comments">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="Body">Add Comment</label>
                    <textarea id="body" class="form-control" name="body" placeholder="Enter the comment for the post"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>

                @include('layouts.error')
            </form>

            </div>
        </div>
    </div>

@endsection