<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

/**************** blog section of the website ********************/

// single blog page
Route::get('blog/{id}/{title}', 'BlogController@show')->name("blog.show");
// blog home page
Route::resource('blog', 'BlogController');
Route::post('blog/{blog}/comment', 'BlogController@update')->name("blog.comment");

//Route::get('/blogs', [
//    "as" => "blog",
//    "uses" => 'BlogController@index']);
//
//// blog show page
//Route::get("/blog/{blogId}", [
//    "as" => "blogShow",
//    function () {
//        $title = "blog";
//        return view("blog.show", compact( "title"));
//    }]);

/**************** forum section of the website ********************/

//Route::resource("forum", "ForumController");

// forum home page
Route::get('/forum', "ForumController@index")->name("forum");
// forum question ans page
Route::get('forum/{id}/{question}', "ForumController@show")->name("forum.show");

/**************** contest section of the website ********************/

// full contest controller
Route::resource('contests', 'ContestController');

// contest home page
//Route::get('/contests', [
//    "as" => "contests",
//    function () {
//        $title = "contest";
//        return view('contests.index')->withTitle($title);
//    }]);

// single contest details showing page
Route::get("/contests/{id}", [
    "as" => "contestShow",
    function () {
        $title = "contest";
        return view("contests.show", compact("id", "title"));
    }]);

// single contest problems displaying page
// single contest details showing page
Route::get("/contests/{contestId}/{problemId}", [
    "as" => "contestProblemShow",
    function () {
        $title = "contest";
        return view("contests.problems", compact("contestId", "problemId", "title"));
    }]);

/**************** upcoming events section of the website ********************/

// full events controller
Route::resource('upcomingEvents', 'EventController');


// adding users choice and the event
Route::post('upcomingEvents/add/{event}', 'EventController@add')->name('event_add_user');

// events home page
//Route::get('/upcomingEvents', [
//    "as" => "upcomingEvents",
//    function () {
//        $title = "upcomingEvent";
//        return view('upcomingEvents.index', compact("title"));
//    }]);

/**************** rank list section of the website ********************/

// full rank controller
Route::resource('rank', 'RankListController');

// rank home page
//Route::get('/rank', [
//    "as" => "rank",
//    function () {
//        $title = "rank";
//        return view('rank.index', compact('title'));
//    }]);

Auth::routes();

/************** user ****************/
// user's profile page
Route::get('user/{name}', 'UserController@index')->name('user');
Route::get('user/{name}/{show}', 'UserController@show')->name("user.show");
