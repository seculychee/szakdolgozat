<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ir�ny�t� k�zpont c�mez�s szerint
| get --> URL hely�re beg�pelt string eset�n hova ir�ny�tson , mit csin�ljon
| post --> egy adott k�r�s tov�bb�t�sa a megadott honlapr�l
|
*/

//f?oldal
Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('login', function () {
    return view('pages.login');
});
//regist
Route::get('regist', function () {
    return view('pages.test');
})->name("regGet");


// �tmenetileg minden gombra a login a regisztr�ci�s fel�letre ugrik k�s�bbiekbe jav�tani kell



// vizsgálat bejelentkezett-e
Route::get('login', array('uses' => 'HomeController@showLogin'));

// Post
Route::post('login', array('uses' => 'HomeController@doLogin'));





Route::post('/regisztracio','contactController@regStart')->name('reg');

// Only redirect when user has a authenticated
Route::group(['middleware' => 'auth'], function () {
    Route::get('adatlap','contactController@getDatas')->name('getContactData');
});


