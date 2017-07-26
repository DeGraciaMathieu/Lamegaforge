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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('videos', 'VideosController@index')->name('video.index');
Route::get('videos/sort/{sort}', 'VideosController@index')->name('video.sort');

Route::get('video/{id}', 'VideosController@show')->name('video.show');
Route::post('video/push-comment', 'VideosController@pushComment')->name('video.push-comment');

Route::get('test', function(){

	$twitch = app('services\twitch')->online();

	if (! $twitch) {
		return response()->json(['online' => false]);
	}

	return response()->json([
		'online' => true,
		'background' => $twitch['preview']['large'],
	]);

});


