<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@getIndex')->name('/');

Route::get('foo', function () {
    return view('pages.test');
});

Route::get('test', 'PagesController@gettest')->name('test');

Route::get('about', 'PagesController@getabout')->name('about');

Route::get('help', 'PagesController@gethelp')->name('help');

Route::get('help/first', 'PagesController@gethelp1')->name('help1');

Route::resource('product','ProductController');

Route::get('valami', 'PagesController@getvalami')->name('valami');
Auth::routes();

Route::get('/index', 'HomeController@index');

Route::get('one', function () {
    return view('pages.one');
});




Route::get('/addUserData', function () {
    return view('pages.UserData');
})->name('addUserdata');
;


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'admin'], function () {
    	Route::resource('/user', 'UserController');
    	Route::resource('/post', 'PostController');
    });
});
