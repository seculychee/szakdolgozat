<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Teljes irányító központ. Itt zajlanak le a get,post,put,resource  
| kérések parancsai amik a címsorban jelennek meg. A laravel ezeket a kéréseket 
| dolgozza fel és kezeli le a Controlleren keresztül.
|
*/

Route::get('/', 'PagesController@getIndex')->name('/');
Route::get('/addUserData', function () {
    return view('pages.UserData');
})->name('addUserdata');

Route::get('/addUserData', 'PagesController@userData')->name('/addUserData');


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
Route::group(['middleware' => ['auth']], function(){
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');    
    Route::get('/role_permission', 'RolesPermissionsController@index');
    Route::post('/role_permission', 'RolesPermissionsController@store');
    // Cégkezelés 
    Route::get('company', 'CompanyController@index');
    Route::get('companyAdd', 'CompanyController@create')->name('getCompAdd');
    Route::post('companyStore', 'CompanyController@store')->name('comp');
    Route::get('companyData/{id}', 'CompanyController@data')->name('getdata');
    //Terem kezelés
    Route::post('class/{id}', 'CompanyController@classTo')->name('classTo');
    Route::put('classAdd/{id}', 'CompanyController@classAdd')->name('classAdd');
    //Foglalás kezelések
    Route::get('books', 'BookController@index');
    Route::get('booksAdd/{id}', 'BookController@create')->name('booksadd');
    Route::post('booksPlus', 'BookController@store')->name('booksplus');
    //Felhasználó foglalás kezelések
    Route::get('allbooks', 'BookController@userbook')->name('userbooks');
    Route::get('coachLesson', 'BookController@coachlesson')->name('coach');
    //órára jelentkezés
    Route::post('lessongo/{id}', 'BookController@usertolesson')->name('lessonstart');



});
Route::get('regist', 'ContactController@index');
Route::post("store", 'ContactController@store')->name('reg'); 
    /*Route::get('companyData/{company}', function($company){

        $company = Company::find($data)->sites()->get();
        dd($company);
        return View::make('notes.main')
        ->with('destinations', $destinations);
});*/

/*
//tesztelések
Route::get("create", 'testing@index');
Route::post("store", 'testing@store');

Route::resource('itemCRUD','ItemCRUDController');

Route::get('result', 'ScoreController@result');
Route::post("store", 'ScoreController@store');*/

            //regsiztráció irányítás

/*
    Route::group(['prefix' => 'admin'], function () {
    	Route::resource('/user', 'UserController');
    	Route::resource('/post', 'PostController');
    });*/
/*
Route::get('one', function () {
    return view('pages.one');
});
*/