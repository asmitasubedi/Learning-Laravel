<?php

//use App\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('tasks', function () {
//
//    $tasks=Task::all();
//
//    //$tasks=DB::table('tasks')->latest()->get();
//    //return $tasks;
//    return view('tasks.index', compact('tasks'));
//});
//
//Route::get('/tasks/{task}', function ($id) {
//
//    //$task=DB::table('tasks')->find($id);
//    $task=Task::find($id);
//
////    dd($task);
//    //return $tasks;
//    return view('tasks.show', compact('task'));
//});

Route::get('about','PagesController@about');

Route::get('tasks', 'TasksController@index');
Route::get('tasks/{task}', 'TasksController@show');


Route::get('/', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');
Route::get('posts/{post}', 'PostsController@show');
Route::post('/posts','PostsController@store');

Route::get('posts/{post}/comments', 'CommentsController@store');