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

/*
Route::get('one', function () {
    return view('pages.one');
});
*/


Route::get('/addUserData', function () {
    return view('pages.UserData');
})->name('addUserdata');

Route::get('/addUserData', 'PagesController@userData')->name('/addUserData');


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
/*
    Route::group(['prefix' => 'admin'], function () {
    	Route::resource('/user', 'UserController');
    	Route::resource('/post', 'PostController');
    });*/
});
Route::group(['middleware' => ['auth']], function(){
	Route::resource('users', 'UsersController');
	Route::resource('roles', 'RolesController');
	Route::resource('permissions', 'PermissionsController');    
	Route::get('/role_permission', 'RolesPermissionsController@index');
	Route::post('/role_permission', 'RolesPermissionsController@store');
    // Company 
    Route::get('company', 'CompanyController@index');
    Route::get('companyAdd', 'CompanyController@create')->name('getCompAdd');
    Route::post('companyStore', 'CompanyController@store')->name('comp');
    Route::get('companyData/{id}', 'CompanyController@data')->name('getdata');
    //Terem kezelés
    Route::post('class/{id}', 'CompanyController@classTo')->name('classTo');
    Route::put('classAdd/{id}', 'CompanyController@classAdd')->name('classAdd');
    //Foglalás kezelések
    Route::get('books', 'BookController@index');
    Route::get('booksAdd', 'BookController@create');
    /*Route::get('companyData/{company}', function($company){

        $company = Company::find($data)->sites()->get();
        dd($company);
        return View::make('notes.main')
        ->with('destinations', $destinations);

});*/

});
/*
//tesztelések
Route::get("create", 'testing@index');
Route::post("store", 'testing@store');

Route::resource('itemCRUD','ItemCRUDController');

Route::get('result', 'ScoreController@result');
Route::post("store", 'ScoreController@store');*/

            //regsiztráció irányítás
Route::get('regist', 'ContactController@index');
Route::post("store", 'ContactController@store')->name('reg'); 

