<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function __construct(){

        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        $posts= Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){

        return view('posts.show', compact('post'));
    }

    public function create(){

        return view('posts.create');
    }

    public function store(){

        //create a new post using the request data
//        $post = new Post();
//
//        $post->title = request('title');
//        $post->body = request('body');

        $this->validate(request(),[
            'title' => 'required|min:3',
            'body'=>'required|min:10'
        ]);

        auth()->user()->publish(

            new Post (request(['title', 'body']))
        );

//        Post::create([
//            'title'=> request('title'),
//            'body'=> request('body'),
//                'user_id' =>auth()->id()
//            ]);


//        //save it to database
//        $post->save();

        //redirect to home page
        return redirect('/');

    }



}
