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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testingUp', function() {
	return view('testing.testUp');
});

Route::resource('communities', 'CommunityController');

Route::get('communities/{id}/delete-member/{user_id}', 'CommunityController@deleteMember');

Route::resource('post', 'PostController');


use Illuminate\Http\Request;

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