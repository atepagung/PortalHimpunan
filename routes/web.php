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

use Illuminate\Http\Request;


Route::get('/', function () {

	$posts = \App\Post::where('visibility',1)->with('user')->with('post_type')->get();

	//dd($posts[2]->toArray());

    return view('welcome', ['posts' => $posts]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testingUp', function() {
	return view('testing.testUp');
});

Route::resource('communities', 'CommunityController');

Route::get('communities/{id}/delete-member/{user_id}', 'CommunityController@deleteMember');

Route::resource('post', 'PostController');


Route::get('testingPost', function() {

	$post_types = \App\Post_Type::get();

	return view('testing.testingPost', ['post_types' => $post_types]);
});

Route::post('testingPost', function(Request $request) {
	\App\Post::create([
		'title' => $request->input('title'),
		'body' => $request->input('body'),
		'post_type_id' => $request->input('post_type'),
		'visibility' => $request->input('visibility'),
		'user_id' => Auth::id(),
		'status' => 0
	]);

	die();
});


Route::post('/testingUp', function(Request $request) {
	/*$file = $request->file('image');
	echo "<pre>";
	var_dump($file);
	echo "</pre>";
	die();*/
	$path = $request->image->storeAs('image', 'agung.jpg');
	return $path;
});

Route::get('/hehe', function() {
	$hehe = "<img src=".asset('storage/image/123456aaa_pp.jpg').">";
	//$hehe = asset('storage/image/agung.jpg');
	echo "<pre>";
	var_dump($hehe);
	echo "</pre>";
	die();
	//return 0;
});