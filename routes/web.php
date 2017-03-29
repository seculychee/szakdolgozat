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
Route::group(['prefix' => 'admin','middleware' => ['role:admin']], function(){

    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');
    Route::get('/role_permission', 'RolesPermissionsController@index');
    Route::post('/role_permission', 'RolesPermissionsController@store');
    // Cégkezelés
    Route::get('company', 'CompanyController@index')->name('company');
    Route::get('companyAdd', 'CompanyController@create')->name('getCompAdd');
    Route::post('companyStore', 'CompanyController@store')->name('comp');
    Route::get('companyData/{id}', 'CompanyController@data')->name('getdata');
    //szerkesztés , törlés
    Route::get('companyUpdate/{id}', 'CompanyController@edit')->name('getedit');
    Route::post('companyeupd/{id}', 'CompanyController@update')->name('saveedit');
    Route::get('companydelete/{id}', 'CompanyController@destroy')->name('compdelete');

    //Terem kezelés
    Route::put('classAdd/{id}', 'CompanyController@classAdd')->name('classAdd');
    //szerkesztés , törlés
    Route::get('class/{id}', 'CompanyController@classTo')->name('classTo');
    Route::post('classupdate/{id}', 'CompanyController@classupdate')->name('classupdate');
    Route::get('classdelete/{id}', 'CompanyController@classdestroy')->name('classdelete');
});



Route::group(['prefix' => 'editor','middleware' => ['role:editor']], function(){
    //Foglalás kezelések
    Route::get('books', 'BookController@index')->name('books');
    Route::get('booksAdd/{id}', 'BookController@create')->name('booksadd');
    Route::post('booksPlus', 'BookController@store')->name('booksplus');

    //Felhasználó foglalás kezelések
    //megjelentek kezelése
    Route::get('userinbook/{id}', 'BookController@userinbook')->name('userinbook');
    Route::post('participate/{id}', 'BookController@participate')->name('participate');
    //edző órák kezelése
    Route::get('coachLesson', 'BookController@coachlesson')->name('coach');
    Route::get('coachLessonedit/{id}', 'BookController@coachlessonupdate')->name('editbook');
    Route::post('coachLessonupd/{id}', 'BookController@update')->name('updatebook');
    Route::get('coachLessonupd/{id}', 'BookController@coachlessonupdate')->name('updatebook');
    Route::get('coachLessondelete/{id}', 'BookController@destroy')->name('deletebook');
});

    //órára jelentkezés
    Route::get('allbooks', 'BookController@userbook')->name('userbooks');
    Route::post('lessongo/{id}', 'BookController@usertolesson')->name('lessonstart');







Route::get('regist', 'ContactController@index');
Route::post("store", 'ContactController@store')->name('reg');

